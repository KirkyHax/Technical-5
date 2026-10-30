<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about-pos', function (): void {
    $this->comment('Laravel POS Foundations is ready.');
})->purpose('Display a short project status message');
