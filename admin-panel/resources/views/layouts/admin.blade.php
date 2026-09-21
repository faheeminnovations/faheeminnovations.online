<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }} | Faheem Innovations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-body">
    <aside class="sidebar">
        <a class="admin-brand" href="{{ route('admin.dashboard') }}"><span>F</span> Admin workspace</a>
        <nav class="side-nav" aria-label="Admin navigation">
            <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">⌂ <span>Overview</span></a>
            <a class="{{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}" href="{{ route('admin.enquiries.index') }}">◌ <span>Enquiries</span></a>
            <a class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">◇ <span>Services catalogue</span></a>
            <a class="{{ request()->routeIs('admin.tools.*') ? 'active' : '' }}" href="{{ route('admin.tools.index') }}">✦ <span>AI tools</span></a>
            <a class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">⚙ <span>Settings</span></a>
        </nav>
        <div class="side-foot">
            <a href="{{ url('../') }}">← View public site</a>
            <form method="POST" action="{{ route('admin.logout') }}">@csrf <button type="submit">Sign out</button></form>
        </div>
    </aside>
    <main class="admin-main">
        <header class="topbar">
            <div><h1>{{ $title ?? 'Overview' }}</h1><p>{{ now()->format('l, d F Y') }}</p></div>
            <div class="admin-user">Faheem Innovations <b>FI</b></div>
        </header>
        <div class="admin-content">
            @if(session('success')) <div class="flash">{{ session('success') }}</div> @endif
            @if($errors->any()) <div class="flash error">{{ $errors->first() }}</div> @endif
            @yield('content')
        </div>
    </main>
</body>
</html>
