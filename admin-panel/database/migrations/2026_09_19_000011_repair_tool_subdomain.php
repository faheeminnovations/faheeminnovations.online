<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Tool;

return new class extends Migration
{
    public function up(): void
    {
        Tool::where('sub', 'http-localhost-speech-text-ai')->update([
            'sub' => 'speech-to-text',
        ]);
    }

    public function down(): void
    {
        Tool::where('sub', 'speech-to-text')->update([
            'sub' => 'http-localhost-speech-text-ai',
        ]);
    }
};
