<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0A0E1A" />
  <link rel="icon" type="image/svg+xml" href="../favicon.svg" />
  <title>Texto para Voz com IA | Gerador de Voz</title>
  <meta name="description" content="Converta texto escrito em áudio, escolha vozes e descarregue MP3 com a ferramenta Texto para Voz da Faheem Innovations.">
  <meta name="robots" content="index, follow">
  <meta name="content-language" content="pt-BR">
  <meta name="language" content="Portuguese">
  <meta name="geo.region" content="BR">
  <meta name="geo.country" content="Brazil">
  <link rel="canonical" href="https://ai-text-to-speech.faheeminnovations.online/">
  <link rel="alternate" hreflang="pt-BR" href="https://ai-text-to-speech.faheeminnovations.online/">
  <link rel="alternate" hreflang="x-default" href="https://ai-text-to-speech.faheeminnovations.online/">
  <meta property="og:title" content="Text to Speech AI">
  <meta property="og:description" content="Turn written content into spoken audio with voice, rate, pitch, and download controls.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:url" content="https://ai-text-to-speech.faheeminnovations.online/">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebApplication","name":"Texto para Voz com IA","url":"https://ai-text-to-speech.faheeminnovations.online/","applicationCategory":"MultimediaApplication","operatingSystem":"Any","inLanguage":"pt-BR","areaServed":{"@type":"Country","name":"Brazil"},"description":"Converta texto escrito em áudio e descarregue MP3."}</script>
  <style>
    :root {
      --bg: #f4f6fb;
      --panel: #ffffff;
      --ink: #172033;
      --muted: #56657d;
      --line: #dfe7f4;
      --primary: #2d6cdf;
      --primary-dark: #1e4fb8;
      --primary-soft: #edf3ff;
      --accent: #f0a34d;
      --success: #1b8f5a;
      --shadow: 0 22px 48px rgba(18, 31, 56, 0.12);
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(180deg, #eef4ff 0%, #f9fafc 100%);
      color: var(--ink);
    }
    .wrap { width: min(1180px, calc(100% - 32px)); margin: 0 auto; }
    .topbar {
      background: rgba(255,255,255,0.75);
      border-bottom: 1px solid rgba(148,163,184,0.2);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      z-index: 10;
    }
    .nav-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 0;
      gap: 12px;
    }
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      font-size: 1.12rem;
    }
    .brand-mark {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #2d6cdf, #79a9ff);
      color: white;
      font-weight: 800;
    }
    .nav a {
      text-decoration: none;
      color: var(--muted);
      margin-left: 16px;
      font-size: 0.95rem;
    }
    .hero {
      padding: 40px 0 20px;
    }
    .hero-grid {
      display: grid;
      grid-template-columns: 1.02fr 1fr;
      gap: 32px;
      align-items: start;
    }
    .eyebrow {
      display: inline-block;
      background: var(--primary-soft);
      color: var(--primary-dark);
      border: 1px solid #d6e4ff;
      border-radius: 999px;
      padding: 8px 12px;
      font-size: 0.74rem;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      font-weight: 700;
    }
    h1 {
      font-size: clamp(2.3rem, 5vw, 4rem);
      line-height: 1.04;
      margin: 18px 0 14px;
    }
    .lead {
      font-size: 1.08rem;
      line-height: 1.7;
      color: var(--muted);
      max-width: 620px;
    }
    .cta-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 24px;
    }
    .btn {
      border-radius: 12px;
      border: 1px solid var(--line);
      padding: 12px 18px;
      font-size: 0.96rem;
      font-weight: 700;
      cursor: pointer;
      background: white;
      color: var(--ink);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s ease;
    }
    .btn.primary {
      background: linear-gradient(135deg, var(--primary), #5b8df5);
      border-color: transparent;
      color: white;
      box-shadow: 0 12px 24px rgba(45, 108, 223, 0.22);
    }
    .btn.primary:hover { background: linear-gradient(135deg, var(--primary-dark), #4f7ce7); }
    .btn.secondary:hover { background: #f8faff; }
    .stats {
      display: grid;
      grid-template-columns: repeat(3, minmax(120px, 1fr));
      gap: 12px;
      margin-top: 24px;
    }
    .stat {
      background: rgba(255,255,255,0.7);
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 14px 16px;
    }
    .stat span {
      color: var(--muted);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }
    .stat strong {
      display: block;
      font-size: 1.5rem;
      margin-top: 6px;
    }
    .panel {
      background: var(--panel);
      border: 1px solid var(--line);
      border-radius: 22px;
      box-shadow: var(--shadow);
      padding: 18px;
    }
    .panel-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      margin-bottom: 10px;
      color: var(--muted);
      font-size: 0.9rem;
    }
    .badge {
      background: #eef8f3;
      color: var(--success);
      border: 1px solid #cfeee0;
      border-radius: 999px;
      padding: 6px 10px;
      font-size: 0.78rem;
      font-weight: 700;
    }
    textarea {
      width: 100%;
      min-height: 290px;
      resize: vertical;
      border: 1px solid var(--line);
      border-radius: 18px;
      background: #fbfcff;
      color: var(--ink);
      font-size: 1rem;
      line-height: 1.7;
      padding: 18px 16px;
      font-family: Arial, sans-serif;
    }
    textarea:focus {
      outline: 2px solid rgba(45,108,223,0.16);
      border-color: rgba(45,108,223,0.45);
    }
    .controls {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 14px;
    }
    .voice-box {
      margin-top: 20px;
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 16px;
      background: #fbfcff;
    }
    .voice-box h3 {
      margin: 0 0 10px;
      font-size: 1rem;
    }
    .voice-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(160px, 1fr));
      gap: 10px;
      margin-top: 10px;
    }
    .select, .range {
      width: 100%;
      padding: 10px 12px;
      border-radius: 10px;
      border: 1px solid var(--line);
      background: white;
      color: var(--ink);
      font-size: 0.95rem;
    }
    .range { padding: 0; }
    .section { padding: 36px 0 18px; }
    .features {
      display: grid;
      grid-template-columns: repeat(3, minmax(220px, 1fr));
      gap: 18px;
      margin-top: 18px;
    }
    .feature {
      background: rgba(255,255,255,0.8);
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 18px;
    }
    .feature h4 { margin: 12px 0 8px; }
    .feature p { margin: 0; color: var(--muted); line-height: 1.65; }
    .icon {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      background: var(--primary-soft);
      color: var(--primary-dark);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
    }
    @media (max-width: 860px) {
      .hero-grid { grid-template-columns: 1fr; }
      .features { grid-template-columns: 1fr; }
      .voice-grid { grid-template-columns: 1fr; }
      .nav-row { flex-wrap: wrap; }
    }
  </style>
</head>
<body>
  <header class="topbar">
    <div class="wrap nav-row">
      <div class="brand">
        <div class="brand-mark">T</div>
        <span>Texto → Voz</span>
      </div>
      <nav class="nav">
        <a href="/faheeminnovations.online/tools">Voltar às ferramentas</a>
      </nav>
    </div>
  </header>

  <main class="wrap hero">
    <section class="hero-grid">
      <div>
        <div class="eyebrow">Ferramenta de voz com IA</div>
        <h1>Converta texto escrito em áudio natural.</h1>
        <p class="lead">Cole uma mensagem, parágrafo ou artigo e ouça-o no navegador. Ideal para narrações, revisões, formação e acessibilidade.</p>

        <div class="cta-row">
          <button class="btn primary" id="speak-btn" type="button">Ler texto</button>
          <button class="btn secondary" id="sample-btn" type="button">Carregar exemplo</button>
          <button class="btn secondary" id="pause-btn" type="button">Pausar</button>
          <button class="btn secondary" id="stop-btn" type="button">Parar</button>
        </div>

        <div class="stats">
          <div class="stat">
            <span>Palavras</span>
            <strong id="word-count">0</strong>
          </div>
          <div class="stat">
            <span>Caracteres</span>
            <strong id="char-count">0</strong>
          </div>
          <div class="stat">
            <span>Estado</span>
            <strong id="status">Pronto</strong>
          </div>
        </div>
      </div>

      <div class="panel">
        <div class="panel-head">
          <span>Texto de entrada</span>
          <span class="badge" id="status-badge">Pronto</span>
        </div>
        <textarea id="text-input" placeholder="Cole o seu texto aqui...">Olá e bem-vindo à Faheem Innovations. Esta ferramenta converte texto escrito em áudio para rever guiões, mensagens, instruções e materiais educativos em voz alta.</textarea>

        <div class="voice-box">
          <h3>Definições de voz</h3>
          <div class="voice-grid">
            <div>
              <label for="voice-select">Voz</label>
              <select id="voice-select" class="select"></select>
            </div>
            <div>
              <label for="language-select">Idioma</label>
              <select id="language-select" class="select">
                <option value="pt-BR" selected>Português</option>
              </select>
            </div>
            <div>
              <label for="rate-range">Velocidade</label>
              <input id="rate-range" class="range" type="range" min="0.5" max="1.8" step="0.1" value="1" />
            </div>
            <div>
              <label for="pitch-range">Tom</label>
              <input id="pitch-range" class="range" type="range" min="0.5" max="2" step="0.1" value="1" />
            </div>
            <div>
              <label for="volume-range">Volume</label>
              <input id="volume-range" class="range" type="range" min="0" max="1" step="0.1" value="1" />
            </div>
          </div>
        </div>

        <div class="controls">
          <button class="btn secondary" id="copy-btn" type="button">Copy text</button>
          <button class="btn secondary" id="download-btn" type="button">Download text</button>
          <button class="btn secondary" id="audio-api-btn" type="button">Download audio</button>
        </div>
        <p style="margin: 14px 0 0; color: var(--muted); font-size: 0.9rem; line-height: 1.6;">
          Free audio export uses a public TTS backend and downloads the spoken result as an MP3 file.
        </p>
      </div>
    </section>

    <section class="section">
      <div class="features">
        <div class="feature">
          <div class="icon">1</div>
          <h4>Quick reading</h4>
          <p>Hear scripts or notes aloud without reading each line manually.</p>
        </div>
        <div class="feature">
          <div class="icon">2</div>
          <h4>Voice control</h4>
          <p>Adjust speed, pitch, and volume to match your preferred narration style.</p>
        </div>
        <div class="feature">
          <div class="icon">3</div>
          <h4>Ready to share</h4>
          <p>Use the generated copy for blogs, marketing scripts, or training content.</p>
        </div>
      </div>
    </section>
  </main>

  <script>
    (function () {
      const textInput = document.getElementById('text-input');
      const speakBtn = document.getElementById('speak-btn');
      const pauseBtn = document.getElementById('pause-btn');
      const stopBtn = document.getElementById('stop-btn');
      const sampleBtn = document.getElementById('sample-btn');
      const copyBtn = document.getElementById('copy-btn');
      const downloadBtn = document.getElementById('download-btn');
      const audioApiBtn = document.getElementById('audio-api-btn');
      const voiceSelect = document.getElementById('voice-select');
      const languageSelect = document.getElementById('language-select');
      const rateRange = document.getElementById('rate-range');
      const pitchRange = document.getElementById('pitch-range');
      const volumeRange = document.getElementById('volume-range');
      const wordCount = document.getElementById('word-count');
      const charCount = document.getElementById('char-count');
      const status = document.getElementById('status');
      const statusBadge = document.getElementById('status-badge');

      const sampleText = 'Olá e bem-vindo à Faheem Innovations. Esta ferramenta de texto para voz ajuda a ouvir conteúdos escritos para rever guiões, instruções e mensagens com clareza e rapidez.';

      function updateStats() {
        const text = textInput.value.trim();
        const words = text ? text.split(/\s+/).length : 0;
        const chars = text.length;
        wordCount.textContent = words;
        charCount.textContent = chars;
      }

      function setStatus(value) {
        status.textContent = value;
        statusBadge.textContent = value;
      }

      function populateVoices() {
        const voices = window.speechSynthesis && window.speechSynthesis.getVoices ? window.speechSynthesis.getVoices() : [];
        voiceSelect.innerHTML = '';

        if (!voices.length) {
          const option = document.createElement('option');
          option.value = '';
          option.textContent = 'Voz padrão';
          voiceSelect.appendChild(option);
          return;
        }

        voices.forEach((voice, index) => {
          const option = document.createElement('option');
          option.value = index;
          option.textContent = `${voice.name} (${voice.lang})`;
          if (voice.default) option.selected = true;
          voiceSelect.appendChild(option);
        });
      }

      function speakText() {
        if (!('speechSynthesis' in window)) {
          setStatus('Não suportado');
          return;
        }

        const text = textInput.value.trim();
        if (!text) {
          setStatus('Sem texto');
          return;
        }

        window.speechSynthesis.cancel();
        const utterance = new SpeechSynthesisUtterance(text);
        const voices = window.speechSynthesis.getVoices();
        const selectedVoice = voices[Number(voiceSelect.value)];

        if (selectedVoice && selectedVoice.lang.toLowerCase().startsWith(languageSelect.value.slice(0, 2).toLowerCase())) utterance.voice = selectedVoice;
        utterance.rate = Number(rateRange.value);
        utterance.pitch = Number(pitchRange.value);
        utterance.volume = Number(volumeRange.value);
        utterance.lang = selectedVoice ? selectedVoice.lang : languageSelect.value;

        utterance.onstart = () => setStatus('A falar');
        utterance.onend = () => setStatus('Concluído');
        utterance.onerror = () => setStatus('Erro');

        window.speechSynthesis.speak(utterance);
      }

      speakBtn.addEventListener('click', speakText);
      pauseBtn.addEventListener('click', () => {
        if ('speechSynthesis' in window) {
          if (window.speechSynthesis.paused) window.speechSynthesis.resume();
          else window.speechSynthesis.pause();
          setStatus(window.speechSynthesis.paused ? 'Pausado' : 'Retomado');
        }
      });
      stopBtn.addEventListener('click', () => {
        if ('speechSynthesis' in window) {
          window.speechSynthesis.cancel();
          setStatus('Parado');
        }
      });

      sampleBtn.addEventListener('click', () => {
        textInput.value = sampleText;
        updateStats();
        setStatus('Exemplo carregado');
      });

      copyBtn.addEventListener('click', async () => {
        const text = textInput.value.trim();
        if (!text) {
          setStatus('Nada para copiar');
          return;
        }
        try {
          await navigator.clipboard.writeText(text);
          setStatus('Copiado');
        } catch (error) {
          setStatus('Cópia bloqueada');
        }
      });

      downloadBtn.addEventListener('click', () => {
        const text = textInput.value.trim();
        if (!text) {
          setStatus('Nada para descarregar');
          return;
        }
        const blob = new Blob([text], { type: 'text/plain;charset=utf-8' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'text-to-speech.txt';
        document.body.appendChild(link);
        link.click();
        link.remove();
        URL.revokeObjectURL(link.href);
        setStatus('Descarregado');
      });

      audioApiBtn.addEventListener('click', async () => {
        const text = textInput.value.trim();
        if (!text) {
          setStatus('Nothing to download');
          return;
        }

        try {
          setStatus('A gerar áudio...');

          const selectedVoice = window.speechSynthesis && window.speechSynthesis.getVoices
            ? window.speechSynthesis.getVoices()[Number(voiceSelect.value)]
            : null;

          const lang = (selectedVoice && selectedVoice.lang && selectedVoice.lang.toLowerCase().startsWith(languageSelect.value.slice(0, 2).toLowerCase())) ? selectedVoice.lang.split('-')[0] : languageSelect.value.split('-')[0];
          const params = new URLSearchParams({
            text,
            lang
          });

          const response = await fetch('tts.php?' + params.toString());
          if (!response.ok) {
            throw new Error('Audio generation failed');
          }

          const blob = await response.blob();
          const url = URL.createObjectURL(blob);
          const link = document.createElement('a');
          link.href = url;
          link.download = 'text-to-speech.mp3';
          document.body.appendChild(link);
          link.click();
          link.remove();
          URL.revokeObjectURL(url);

          setStatus('Áudio descarregado');
        } catch (error) {
          console.error(error);
          setStatus('Falha ao gerar áudio');
        }
      });

      textInput.addEventListener('input', updateStats);
      languageSelect.addEventListener('change', () => {
        populateVoices();
        setStatus('Language selected');
      });
      if ('speechSynthesis' in window) {
        populateVoices();
        window.speechSynthesis.onvoiceschanged = populateVoices;
      }
      updateStats();
    })();
  </script>
</body>
</html>
