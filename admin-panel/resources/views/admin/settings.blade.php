@extends('layouts.admin')

@section('content')
<section class="panel settings-panel">
    <div class="panel-head"><h2>Site settings</h2><span>Laravel database</span></div>
    <form method="POST" action="{{ route('admin.settings.update') }}" class="settings-form">@csrf
        <div><label>Business email<input type="email" name="business_email" value="{{ \App\Models\Setting::where('key', 'business_email')->value('value') ?? 'hello@faheeminnovations.com' }}" required></label><label>Main domain<input name="domain" value="{{ \App\Models\Setting::where('key', 'domain')->value('value') ?? 'faheeminnovations.com' }}" required></label></div>
        <button class="primary" type="submit">Save settings</button>
    </form>
</section>
@endsection
