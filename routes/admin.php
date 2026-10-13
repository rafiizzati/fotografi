<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', fn() => 'Dashboard Pengelolaan Fotografer & Persewaan Alat')
    ->name('dashboard');