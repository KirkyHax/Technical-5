@extends('layouts.app', ['title' => 'Home | POS Foundations'])

@section('content')
    <section class="hero">
        <p class="eyebrow">IT0049 · Laravel MVC Exercise</p>
        <h1>From zero to four pages, again.</h1>
        <p class="lead">A small point-of-sale foundation built with Laravel routes, controllers, Blade views, and temporary static data.</p>
        <div class="button-row">
            <a class="button primary" href="{{ route('customers.index') }}">View customer accounts</a>
            <a class="button secondary" href="{{ route('users.index') }}">View user accounts</a>
        </div>
    </section>

    <section class="feature-grid" aria-label="Application features">
        <article class="feature-card">
            <span class="feature-number">01</span>
            <h2>Clear routes</h2>
            <p>Every page has a named route in <code>routes/web.php</code>, making navigation explicit and readable.</p>
        </article>
        <article class="feature-card">
            <span class="feature-number">02</span>
            <h2>Focused controllers</h2>
            <p>Controllers coordinate the page response while keeping the sample data separate from the Blade templates.</p>
        </article>
        <article class="feature-card">
            <span class="feature-number">03</span>
            <h2>Reusable views</h2>
            <p>A shared layout keeps the navigation and visual style consistent across all four pages.</p>
        </article>
    </section>
@endsection
