<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Faheem Innovations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-body">
    <main class="login-card">
        <div class="login-mark">F</div>
        <p class="eyebrow">Faheem Innovations</p>
        <h1>Welcome back</h1>
        <p class="login-copy">Sign in to manage enquiries, services and AI tools.</p>
        @if($errors->any()) <div class="flash error">{{ $errors->first() }}</div> @endif
        <form method="POST" action="{{ route('login.authenticate') }}" class="login-form">
            @csrf
            <label>Email address<input type="email" name="email" value="{{ old('email') }}" required autofocus></label>
            <label>Password<input type="password" name="password" required></label>
            <label class="check"><input type="checkbox" name="remember"> Remember me</label>
            <button type="submit" class="primary">Sign in to admin</button>
        </form>
        <p class="demo-hint">Demo: <strong>admin@faheeminnovations.com</strong> / <strong>password</strong></p>
    </main>
</body>
</html>
