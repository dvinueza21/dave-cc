<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/messages', [ContactController::class, 'index'])
        ->name('admin.messages');
});

Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.messages');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
