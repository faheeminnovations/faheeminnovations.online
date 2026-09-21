<?php

use App\Models\Tool;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Tool::where('sub', 'speech-to-text')->update([
            'url' => 'http://localhost/speech-text-ai/',
        ]);
    }

    public function down(): void
    {
        Tool::where('sub', 'speech-to-text')->update([
            'url' => 'http://localhost/Speech-Text-ai/',
        ]);
    }
};
