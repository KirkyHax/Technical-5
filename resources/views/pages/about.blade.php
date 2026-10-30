@extends('layouts.app', ['title' => 'About | POS Foundations'])

@section('content')
    <section class="page-heading">
        <p class="eyebrow">About the exercise</p>
        <h1>Laravel MVC in four pages</h1>
        <p class="lead">This application mirrors the responsibilities introduced in the earlier CodeIgniter activity using Laravel's conventions.</p>
    </section>

    <section class="about-grid">
        <div>
            <h2>How a request moves</h2>
            <ol class="steps">
                <li><strong>Route:</strong> receives the URL and selects the controller method.</li>
                <li><strong>Controller:</strong> prepares the response and temporary account data.</li>
                <li><strong>Blade view:</strong> renders the page using reusable layout components.</li>
            </ol>
        </div>
        <div class="note-panel">
            <p class="eyebrow">Current data source</p>
            <h2>Static PHP arrays</h2>
            <p>The customer and user pages intentionally use arrays inside their controllers. This keeps the exercise focused on Laravel fundamentals before introducing database-backed models.</p>
        </div>
    </section>
@endsection
