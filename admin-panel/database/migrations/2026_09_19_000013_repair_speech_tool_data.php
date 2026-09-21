<?php

use App\Models\Tool;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Tool::where('name', 'Speech→Text')->update([
            'sub' => 'speech-to-text',
            'url' => 'http://localhost/Speech-Text-ai/',
        ]);
    }

    public function down(): void
    {
        Tool::where('name', 'Speech→Text')->update([
            'sub' => 'http-localhost-speech-text-ai-',
            'url' => 'http://localhost/Speech-Text-ai/',
        ]);
    }
};
