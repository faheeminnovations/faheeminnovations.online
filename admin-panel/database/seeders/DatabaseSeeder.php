<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Enquiry;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Faheem Innovations Admin',
            'email' => 'admin@faheeminnovations.online',
            'password' => 'Innovations@890',
            'is_admin' => true,
        ]);

        foreach ([
            [
                'name' => 'Voz para Texto',
                'sub' => 'ai-speech-to-text',
                'url' => 'https://ai-speech-to-text.faheeminnovations.online/',
                'short' => 'Converta gravações de voz e fala em texto preciso.',
                'keywords' => 'voz para texto, transcrição de voz, transcrição de áudio, reconhecimento de fala com IA',
                'icon' => 'mic',
                'status' => 'live',
            ],
            [
                'name' => 'Texto para Voz',
                'sub' => 'ai-text-to-speech',
                'url' => 'https://ai-text-to-speech.faheeminnovations.online/',
                'short' => 'Converta texto escrito em áudio falado para descarregar.',
                'keywords' => 'texto para voz, voz com IA, gerador de voz, descarregar áudio',
                'icon' => 'speaker',
                'status' => 'live',
            ],
            [
                'name' => 'Resumidor de Documentos',
                'sub' => 'ai-document-summariser',
                'url' => 'https://ai-document-summariser.faheeminnovations.online/',
                'short' => 'Resuma PDFs, imagens e documentos colados.',
                'keywords' => 'resumidor de documentos, resumidor de PDF, resumidor de imagens, análise documental com IA',
                'icon' => 'doc',
                'status' => 'live',
            ],
            [
                'name' => 'Imagem para Texto',
                'sub' => 'ai-image-to-text',
                'url' => 'https://ai-image-to-text.faheeminnovations.online/',
                'short' => 'Leia texto de fotos, digitalizações e capturas de ecrã.',
                'keywords' => 'imagem para texto, OCR, extração de texto de fotos, leitor de digitalizações',
                'icon' => 'scan',
                'status' => 'live',
            ],
            [
                'name' => 'Texto para Imagem',
                'sub' => 'ai-text-to-image',
                'url' => 'https://ai-text-to-image.faheeminnovations.online/',
                'short' => 'Transforme mensagens escritas em imagens PNG para partilhar.',
                'keywords' => 'texto para imagem, criador de frases, imagem para redes sociais, gerador PNG',
                'icon' => 'doc',
                'status' => 'live',
            ],
        ] as $tool) {
            Tool::updateOrCreate(['sub' => $tool['sub']], $tool);
        }

        foreach ([
            [
                'name' => 'Web Development',
                'category' => 'Technology',
                'short' => 'HTML, CSS, JavaScript, React and backend fundamentals, built up into full production stacks.',
                'details' => 'Build modern websites and web applications from frontend foundations through backend integration and deployment.',
                'timeline' => 'Foundational to Advanced',
                'works' => 'HTML, CSS, JavaScript, React, PHP, Laravel',
                'visible' => true,
            ],
            [
                'name' => 'AI Engineering',
                'category' => 'Technology',
                'short' => 'Applied machine learning, LLM tooling, and shipping AI features into real products.',
                'details' => 'Learn how to design, integrate, test, and ship useful AI features in reliable production products.',
                'timeline' => 'Intermediate to Advanced',
                'works' => 'Machine learning, LLMs, APIs, automation, AI products',
                'visible' => true,
            ],
            [
                'name' => 'DevOps',
                'category' => 'Technology',
                'short' => 'CI/CD pipelines, containers, cloud infrastructure and deployment at production scale.',
                'details' => 'Create repeatable deployment workflows and manage the infrastructure needed to run applications reliably.',
                'timeline' => 'Intermediate to Advanced',
                'works' => 'CI/CD, Docker, cloud infrastructure, monitoring',
                'visible' => true,
            ],
            [
                'name' => 'Career Skills',
                'category' => 'Professional Development',
                'short' => 'System design, interview preparation, and the practical skills engineering interviews test for.',
                'details' => 'Strengthen practical engineering communication, system design thinking, interview preparation, and career confidence.',
                'timeline' => 'All levels',
                'works' => 'System design, interviews, communication, career planning',
                'visible' => true,
            ],
        ] as $service) {
            Service::updateOrCreate(['name' => $service['name']], $service);
        }



        Setting::insert([
            ['key' => 'business_email', 'value' => 'hello@faheeminnovations.online', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'domain', 'value' => 'faheeminnovations.online', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
