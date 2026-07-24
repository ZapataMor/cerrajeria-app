<?php

use App\Http\Controllers\LocksmithPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LocksmithPageController::class, 'home'])->name('home');
Route::get('/servicios', [LocksmithPageController::class, 'services'])->name('services');
Route::get('/productos', [LocksmithPageController::class, 'products'])->name('products');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
