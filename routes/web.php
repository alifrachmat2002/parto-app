<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/permohonan-surat/create', [PermohonanSuratController::class, 'create'])->name('permohonan-surat.create');
    Route::post('/permohonan-surat/store', [PermohonanSuratController::class, 'store'])->name('permohonan-surat.store');
});

require __DIR__.'/auth.php';
