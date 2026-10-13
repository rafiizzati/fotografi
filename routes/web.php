<?php

use Illuminate\Support\Facades\Route;

Route::name('customer.')
    ->group(base_path('routes/customer.php'));

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(base_path('routes/admin.php'));