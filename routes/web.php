<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WebController::class, 'index'])->name('landing');
