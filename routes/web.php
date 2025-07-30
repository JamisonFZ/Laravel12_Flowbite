<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\AppsController;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Link principal do dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Links do dashboard
Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard.')
    ->group(function () {
        Route::get('aplications', [AppsController::class, 'index'])->name('apps');
    });

// Links do perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
