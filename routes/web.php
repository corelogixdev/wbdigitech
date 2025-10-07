<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeoRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;



// Home Page 
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [HomeController::class,'about'])->name('about');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
Route::get('/contact', [ContactController::class,'publicIndex'])->name('contact');

// Public side | Blog Pages
Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blogs.public');
Route::get('/blogs/{id}', [BlogController::class, 'publicShow'])->name('blogs.public.show');

// Public side | Services Page
// Route::get('/service', [ServiceController::class, 'publicIndex'])->name('services.public');
// Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('services.public.show');


// Public side | Services Static Pages
// Web Development Routes
Route::get('/web-service', function() {
    return view('pages.services.website.web');
})->name('services.web');

Route::get('/website-development', function() {
    return view('pages.services.website.website_development');
})->name('services.web_dev');

Route::get('/content-writing', function() {
    return view('pages.services.website.content_writing');
})->name('services.content_writing');

Route::get('/ecommerce-development', function() {
    return view('pages.services.website.ecommerce_development');
})->name('services.ecommerce_development');

Route::get('/shopify-development', function() {
    return view('pages.services.website.shopify_development');
})->name('services.shopify_development');

Route::get('/website-design', function() {
    return view('pages.services.website.website_design');
})->name('services.website_design');

Route::get('/website-maintenance', function() {
    return view('pages.services.website.website_maintainance');
})->name('services.website_maintainance');

Route::get('/wordpress-development', function() {
    return view('pages.services.website.wordpress_development');
})->name('services.wordpress_development');


// Social Media Marketing Routes
Route::get('/social-media-marketing', function() {
    return view('pages.services.smm');
})->name('services.smm');


// SEO Services Routes
Route::get('/seo-service', function() {
    return view('pages.services.seo');
})->name('services.seo');


// Graphic Design Routes
Route::get('/graphic-design', function() {
    return view('pages.services.graphic');
})->name('services.graphic');




// Mobile App Development Routes
Route::get('/mobileapp-service', function() {
    return view('pages.services.mobile');
})->name('services.mobile');

// Digital Campaign Routes
Route::get('/digital-campaigns', function() {
    return view('pages.services.digital-campaigns');
})->name('services.digital');



// Public side | Career Page
Route::get('/career',[CareerController::class,'publicIndex'])->name('careers.public');

// Public side | Privacy Policy
Route::get('/privacy-policy', function(){return view('pages.privacy');})->name('privacy');

// Public side | Cookie Policy
Route::get('/cookie-policy', function(){return view('pages.cookie');})->name('cookie');

// Public side | Customer Pages
Route::get('/customer', [CustomerController::class, 'publicIndex'])->name('customers.public');

// Public side | Portfolio Pages
Route::get('/portfolio', [PortfolioController::class, 'publicIndex'])->name('portfolio.public');
Route::get('/portfolio/{id}', [PortfolioController::class, 'publicShow'])->name('portfolio.public.show');
Route::get('/portfolio/{id}/case-study', [PortfolioController::class, 'caseStudy'])->name('portfolio.case_study');

// Public Side | SeoRequest
Route::get('/seo-request', [SeoRequestController::class, 'publicIndex'])->name('seo-request.public');

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
    
    // Portfolio
    Route::resource('portfolios',PortfolioController::class);

    // Contact 
    Route::resource('contacts',ContactController::class);
    
    // Seo Request
    Route::resource('seo-requests',SeoRequestController::class);

    // Services
    Route::resource('services', ServiceController::class);


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
