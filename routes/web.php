<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndustryController;

// Pages 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');


// Public side (frontend home page blogs list)
Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blogs.public');
Route::get('/blogs/{id}', [BlogController::class, 'publicShow'])->name('blogs.public.show');


// Admin Dashboard Routes
Route::middleware(['admin'])->group(function () {
        
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
        
    // blog controller
    Route::resource('blogs', BlogController::class);
    Route::get('/blogs-create',[BlogController::class,'create'])->name('blogs.create');

    // customer controller
    Route::resource('customers', CustomerController::class);

    // Industry controller  
    Route::resource('industries', IndustryController::class);

        
});

// Profile Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Team Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/admin/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::get('/admin/team/{team}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/admin/team/{team}/update', [TeamController::class, 'update'])->name('team.update');
    Route::post('/admin/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
});

require __DIR__.'/auth.php';
