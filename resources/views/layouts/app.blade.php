<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel POS Foundations' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="{{ route('home') }}">POS<span>Foundations</span></a>
            <nav aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers.*') ? 'active' : '' }}" href="{{ route('customers.index') }}">Customers</a>
                <a class="{{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </header>

    <main class="container page-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">IT0049 · Technical Formative Assessment 5 · Laravel POS Foundations</div>
    </footer>
</body>
</html>
