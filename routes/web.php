<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Pages 
Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');


// Public side (frontend home page blogs list)
Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blogs.public');
Route::get('/blogs/{id}', [BlogController::class, 'publicShow'])->name('blogs.public.show');

// Dashboard Pages Below

// Route::get('/manage-blogs', function () {
//     return view('pages.admin.manage_blogs');
// })->name('manage_blogs');


    // Admin Dashboard Routes
    Route::middleware(['auth','admin'])->group(function () {
        
        Route::get('/admin', function () {
            return view('pages.admin.dashboard');
        })->name('dashboard');
        
        // blog controller
        Route::resource('blogs', BlogController::class);
        
});

// Profile Routes
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
