<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Auth\RegisteredUserController;


// Home Page 
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Public side | Blog Pages
Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blogs.public');
Route::get('/blogs/{id}', [BlogController::class, 'publicShow'])->name('blogs.public.show');

// Public side | Career Page
Route::get('/career',[CareerController::class,'publicIndex'])->name('careers.public');

// Public side | Privacy Policy
Route::get('/privacy-policy', function(){return view('pages.privacy');})->name('privacy');

// Public side | Cookie Policy
Route::get('/cookie-policy', function(){return view('pages.cookie');})->name('cookie');

// Public side | Customer Pages
Route::get('/customer', [CustomerController::class, 'publicIndex'])->name('customers.public');
Route::get('/customers/{id}', [CustomerController::class, 'publicShow'])->name('customers.public.show');

// Need Changes Later
// Public side | Portfolio Pages
Route::get('/portfolio', [PortfolioController::class, 'publicIndex'])->name('portfolio.public');
Route::get('/portfolio/{id}', [PortfolioController::class, 'publicShow'])->name('portfolio.public.show');


// Admin Dashboard Routes
Route::middleware(['role:superadmin,admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
        
    // blog controller
    Route::resource('blogs', BlogController::class);
    Route::get('/blogs-create',[BlogController::class,'create'])->name('blogs.create');

    // customer controller
    Route::resource('customers', CustomerController::class);

    // Industry controller  
    Route::resource('industries', IndustryController::class);

    // Career Controller
    Route::resource('careers', CareerController::class);

    // Team Controller
    Route::resource('team',TeamController::class);

});

// Profile Routes
Route::middleware(['role:superadmin,admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Register Controllers
Route::middleware(['role:superadmin'])->group(function () {

    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
});


require __DIR__.'/auth.php';
