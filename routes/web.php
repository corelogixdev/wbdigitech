<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin', function () {
        
        return view('pages.admin.dashboard');
    })->name('dashboard');

});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
