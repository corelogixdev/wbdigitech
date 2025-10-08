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


// Google Ads Management Routes
Route::get('/google-ads-management', function() {
    return view('pages.services.google_ads.google_ads_management');
})->name('services.google_ads_management');

Route::get('/amazon-marketing', function() {
    return view('pages.services.google_ads.amazon_marketing');
})->name('services.amazon_marketing');

Route::get('/ppc', function() {
    return view('pages.services.google_ads.ppc');
})->name('services.ppc');

Route::get('/google-shopping-ads', function() {
    return view('pages.services.google_ads.google_shopping_ads');
})->name('services.google_shopping_ads');


// SEO Services Routes
Route::get('/seo-service', function() {
    return view('pages.services.seo.seo');
})->name('services.seo');

Route::get('/content-marketing', function() {
    return view('pages.services.seo.content_marketing');
})->name('services.content_marketing');

Route::get('/reputation-management', function() {
    return view('pages.services.seo.reputation_management');
})->name('services.reputation_management');

Route::get('/seo-audit', function() {
    return view('pages.services.seo.seo_audit');
})->name('services.seo-audit');

Route::get('/ecommerce-seo', function() {
    return view('pages.services.seo.ecommerce_seo');
})->name('services.ecommerce_seo');


// Graphic Design Routes
Route::get('/graphic-design', function() {
    return view('pages.services.graphic_design.graphic');
})->name('services.graphic');

Route::get('/logo-design', function() {
    return view('pages.services.graphic_design.logo_design');
})->name('services.logo_design');

Route::get('/leaflet-design', function() {
    return view('pages.services.graphic_design.leaflet_design');
})->name('services.leaflet_design');

Route::get('/brochure-design', function() {
    return view('pages.services.graphic_design.brochure_design');
})->name('services.brochure_design');


// Social Media Marketing Routes
Route::get('/social-media-marketing', function() {
    return view('pages.services.social_media_marketing.smm');
})->name('services.smm');

Route::get('/facebook-advertising', function() {
    return view('pages.services.social_media_marketing.facebook_advertising');
})->name('services.facebook_advertising');

Route::get('/linkedin-advertising', function() {
    return view('pages.services.social_media_marketing.linkedin_advertising');
})->name('services.linkedin_advertising');

Route::get('/pinterest-advertising', function() {
    return view('pages.services.social_media_marketing.pinterest_advertising');
})->name('services.pinterest_advertising');

Route::get('/instagram-advertising', function() {
    return view('pages.services.social_media_marketing.instagram_advertising');
})->name('services.instagram_advertising');

Route::get('/twitter-advertising', function() {
    return view('pages.services.social_media_marketing.twitter_advertising');
})->name('services.twitter_advertising');

Route::get('/youtube-ads', function() {
    return view('pages.services.social_media_marketing.youtube_ads');
})->name('services.youtube_ads');

Route::get('/tiktok-ads', function() {
    return view('pages.services.social_media_marketing.tiktok_ads');
})->name('services.tiktok_ads');

Route::get('/snap-chat-ads', function() {
    return view('pages.services.social_media_marketing.snap_chat_ads');
})->name('services.snap_chat_ads');

Route::get('/whatsapp marketing', function() {
    return view('pages.services.social_media_marketing.whatsapp_marketing');
})->name('services.whatsapp_marketing');







// Mobile App Development Routes
Route::get('/mobileapp-service', function() {
    return view('pages.services.mobile');
})->name('services.mobile');

// // Digital Campaign Routes
// Route::get('/digital-campaigns', function() {
//     return view('pages.services.digital-campaigns');
// })->name('services.digital');



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
