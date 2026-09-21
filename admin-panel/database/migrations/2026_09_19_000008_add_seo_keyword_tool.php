<?php

use App\Models\Tool;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Tool::firstOrCreate(
            ['sub' => 'seo-keyword-tools'],
            [
                'name' => 'SEO Keyword Tools',
                'short' => 'Discover keyword ideas, search intent and content opportunities.',
                'icon' => 'scan',
                'status' => 'soon',
            ]
        );
    }

    public function down(): void
    {
        Tool::where('sub', 'seo-keyword-tools')->delete();
    }
};
