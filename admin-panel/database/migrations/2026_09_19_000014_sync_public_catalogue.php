<?php

use App\Models\Service;
use App\Models\Tool;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $services = [
            ['name' => 'AI chat assistants', 'category' => 'Customer', 'short' => 'Answer customers on your website and WhatsApp, day and night.', 'details' => 'An assistant trained on your FAQs, catalogue and policies. It answers common questions, takes bookings or orders, and hands the chat to a person when it is not sure.', 'timeline' => '2–4 weeks', 'works' => 'Website, WhatsApp Business, Instagram, Messenger'],
            ['name' => 'Lead follow-up tools', 'category' => 'Customer', 'short' => 'Reply to new enquiries in minutes and keep leads warm.', 'details' => 'Scores incoming leads, drafts personal replies for your team to approve, and reminds you when a promising lead goes quiet.', 'timeline' => '2–3 weeks', 'works' => 'CRM, email, Google Sheets, WhatsApp'],
            ['name' => 'Workflow automation', 'category' => 'Operations', 'short' => 'Connect your apps so routine tasks run themselves.', 'details' => 'We map one process, then automate approvals, reports, reminders and data entry between systems.', 'timeline' => '1–3 weeks', 'works' => 'Google Workspace, Microsoft 365, Zapier, n8n'],
            ['name' => 'Company knowledge assistant', 'category' => 'Operations', 'short' => 'Get answers from your own documents.', 'details' => 'Search policies, manuals and past projects in plain language, with a link back to the source of every answer.', 'timeline' => '3–5 weeks', 'works' => 'Google Drive, SharePoint, Notion, PDFs'],
            ['name' => 'Content and marketing tools', 'category' => 'Content', 'short' => 'Draft product copy, posts and emails in your brand voice.', 'details' => 'A writing tool tuned to your tone, products and audience, with review steps so nothing goes out unchecked.', 'timeline' => '2–3 weeks', 'works' => 'Shopify, WordPress, social media schedulers'],
            ['name' => 'Document processing', 'category' => 'Data & vision', 'short' => 'Pull data out of invoices, forms and contracts automatically.', 'details' => 'Reads documents, extracts fields, checks them against your records and flags mismatches.', 'timeline' => '3–4 weeks', 'works' => 'Accounting software, spreadsheets, email inboxes'],
            ['name' => 'Data insights in plain language', 'category' => 'Data & vision', 'short' => 'Ask questions of your sales and operations data and get charts back.', 'details' => 'Ask a question and get an answer, a chart and the numbers behind it.', 'timeline' => '3–5 weeks', 'works' => 'Sheets, Excel, databases, Power BI'],
            ['name' => 'Vision inspection', 'category' => 'Data & vision', 'short' => 'Count, sort and check products from camera images.', 'details' => 'Custom image models that spot defects, count stock or confirm packing using standard cameras or phones.', 'timeline' => '4–8 weeks', 'works' => 'Cameras, phones, existing dashboards'],
            ['name' => 'AI audit and team training', 'category' => 'Advisory', 'short' => 'Find where AI helps your business and get your team confident with it.', 'details' => 'A one-week audit ranks tasks by time saved and risk, followed by hands-on workshops.', 'timeline' => '1 week audit, then workshops', 'works' => 'Any tools you already use'],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['name' => $service['name']], $service + ['visible' => true]);
        }

        $tools = [
            ['name' => 'Text → Speech', 'sub' => 'text-to-speech', 'short' => 'Turn written text into natural-sounding audio.', 'icon' => 'speaker', 'status' => 'soon'],
            ['name' => 'Image → Text', 'sub' => 'ocr', 'short' => 'Read text from photos, scans and screenshots.', 'icon' => 'scan', 'status' => 'soon'],
            ['name' => 'Document summariser', 'sub' => 'summariser', 'short' => 'Get the key points from long documents in seconds.', 'icon' => 'doc', 'status' => 'soon'],
        ];

        foreach ($tools as $tool) {
            Tool::firstOrCreate(['sub' => $tool['sub']], $tool);
        }
    }

    public function down(): void
    {
        Service::whereIn('name', [
            'AI chat assistants', 'Lead follow-up tools', 'Workflow automation',
            'Company knowledge assistant', 'Content and marketing tools',
            'Document processing', 'Data insights in plain language',
            'Vision inspection', 'AI audit and team training',
        ])->delete();

        Tool::whereIn('sub', ['text-to-speech', 'ocr', 'summariser'])->delete();
    }
};
