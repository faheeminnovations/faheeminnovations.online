<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Service;
use App\Models\Tool;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function storePublicEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Enquiry::create($data + ['status' => 'New']);

        try {
            Mail::raw(
                "Nome: {$data['name']}\n" .
                "Email: {$data['email']}\n" .
                "Empresa: " . ($data['company'] ?: '-') . "\n" .
                "Serviço: {$data['service']}\n\n" .
                $data['message'],
                function ($message) use ($data) {
                    $message->to(env('MAIL_TO', 'hello@faheeminnovations.online'))
                        ->replyTo($data['email'], $data['name'])
                        ->subject('Novo contacto: ' . $data['service']);
                }
            );
        } catch (\Throwable $exception) {
            Log::error('Contact enquiry email could not be sent.', [
                'email' => $data['email'],
                'exception' => $exception->getMessage(),
            ]);
        }

        return response()->json(['message' => 'Enquiry received.'], 201)
            ->header('Access-Control-Allow-Origin', '*');
    }

    public function publicContent()
    {
        return response()->json([
            'services' => Service::where('visible', true)->orderBy('name')->get([
                'name', 'category', 'short', 'details', 'timeline', 'works',
            ]),
            'tools' => Tool::orderBy('name')->get([
                'name', 'sub', 'url', 'short', 'keywords', 'icon', 'status',
            ]),
        ])->header('Access-Control-Allow-Origin', '*');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors(['email' => 'These credentials do not match our records.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function dashboard(): View
    {
        $enquiries = Enquiry::latest()->get();
        $services = Service::orderBy('name')->get();
        $tools = Tool::orderBy('name')->get();

        return view('admin.dashboard', compact('enquiries', 'services', 'tools'));
    }

    public function enquiries(): View
    {
        return view('admin.enquiries', ['enquiries' => Enquiry::latest()->get()]);
    }

    public function services(): View
    {
        return view('admin.services', ['services' => Service::orderBy('name')->get()]);
    }

    public function tools(): View
    {
        return view('admin.tools', ['tools' => Tool::orderBy('name')->get()]);
    }

    public function settings(): View
    {
        return view('admin.settings');
    }

    public function updateSettings(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'business_email' => ['required', 'email'],
            'domain' => ['required', 'string', 'max:255'],
        ]);

        foreach ($data as $key => $value) {
            \App\Models\Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Settings saved successfully.');
    }

    public function updateEnquiry(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $enquiry->update($request->validate(['status' => ['required', Rule::in(['New', 'In progress', 'Replied', 'Closed'])]]));

        return back()->with('success', 'Enquiry status updated.');
    }

    public function destroyEnquiry(Enquiry $enquiry): RedirectResponse
    {
        $enquiry->delete();

        return back()->with('success', 'Enquiry deleted.');
    }

    public function storeService(Request $request): RedirectResponse
    {
        Service::create($this->serviceData($request));

        return back()->with('success', 'Service added.');
    }

    public function updateService(Request $request, Service $service): RedirectResponse
    {
        $service->update($this->serviceData($request));

        return back()->with('success', 'Service updated.');
    }

    public function toggleService(Service $service): RedirectResponse
    {
        $service->update(['visible' => ! $service->visible]);

        return back()->with('success', $service->visible ? 'Service published.' : 'Service hidden.');
    }

    public function destroyService(Service $service): RedirectResponse
    {
        $service->delete();

        return back()->with('success', 'Service deleted.');
    }

    public function storeTool(Request $request): RedirectResponse
    {
        Tool::create($this->toolData($request));

        return back()->with('success', 'AI tool added.');
    }

    public function updateTool(Request $request, Tool $tool): RedirectResponse
    {
        $tool->update($this->toolData($request, $tool));

        return back()->with('success', 'AI tool updated.');
    }

    public function toggleTool(Tool $tool): RedirectResponse
    {
        $tool->update(['status' => $tool->status === 'live' ? 'soon' : 'live']);

        return back()->with('success', 'AI tool status updated.');
    }

    public function destroyTool(Tool $tool): RedirectResponse
    {
        $tool->delete();

        return back()->with('success', 'AI tool deleted.');
    }

    private function serviceData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'short' => ['required', 'string', 'max:5000'],
            'details' => ['required', 'string'],
            'timeline' => ['required', 'string', 'max:100'],
            'works' => ['required', 'string', 'max:255'],
            'visible' => ['sometimes', 'boolean'],
        ]) + ['visible' => $request->boolean('visible')];
    }

    private function toolData(Request $request, ?Tool $tool = null): array
    {
        $sub = trim((string) $request->input('sub'));
        $request->merge(['sub' => strtolower((string) preg_replace('/\s+/', '-', $sub))]);

        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sub' => ['required', 'regex:/^[a-z0-9]+(?:[-_][a-z0-9]+)*$/', 'max:100', Rule::unique('tools', 'sub')->ignore($tool?->id)],
            'url' => ['nullable', 'url', 'max:2048'],
            'short' => ['required', 'string', 'max:5000'],
            'keywords' => ['nullable', 'string', 'max:5000'],
            'icon' => ['required', 'string', 'max:50'],
            'status' => ['required', Rule::in(['live', 'soon'])],
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
