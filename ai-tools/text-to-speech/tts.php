<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$text = trim($_GET['text'] ?? '');
$lang = preg_replace('/[^a-zA-Z-]/', '', $_GET['lang'] ?? 'en');
if ($text === '') {
    http_response_code(400);
    echo 'Missing text';
    exit;
}

$apiKey = getenv('ELEVENLABS_API_KEY');
if ($apiKey && $apiKey !== '') {
    $ch = curl_init('https://api.elevenlabs.io/v1/text-to-speech/21m00Tcm4TlvDq8ikWAM');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode([
            'text' => $text,
            'model_id' => 'eleven_multilingual_v2',
            'voice_settings' => ['stability' => 0.5, 'similarity_boost' => 0.8]
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'xi-api-key: ' . $apiKey,
        ],
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $response !== false) {
        header('Content-Type: audio/mpeg');
        header('Content-Disposition: attachment; filename="text-to-speech.mp3"');
        echo $response;
        exit;
    }
}

// Free fallback using a public TTS endpoint if available.
$payload = [
    'text' => $text,
    'lang' => $lang ?: 'en',
];

$endpoint = 'https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&tl=' . urlencode($payload['lang']) . '&q=' . urlencode($payload['text']);

$ch = curl_init($endpoint);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_USERAGENT => 'Mozilla/5.0',
    CURLOPT_TIMEOUT => 30,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200 && $response !== false && strlen($response) > 0) {
    header('Content-Type: audio/mpeg');
    header('Content-Disposition: attachment; filename="text-to-speech.mp3"');
    echo $response;
    exit;
}

http_response_code(502);
header('Content-Type: application/json');

echo json_encode([
    'success' => false,
    'message' => 'Unable to generate free TTS audio right now. Add ELEVENLABS_API_KEY in environment to enable real audio export.'
]);
