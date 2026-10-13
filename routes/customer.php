<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => 'Halaman Katalog Jasa Fotografi & Penyewaan Alat')
    ->name('home');