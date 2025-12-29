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
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
Route::get('/contact', [ContactController::class, 'publicIndex'])->name('contact');

// Public side | Blog Pages
Route::get('/blog', [BlogController::class, 'publicIndex'])->name('blogs.public');
Route::get('/blogs/{slug}', [BlogController::class, 'publicShow'])->name('blogs.public.show');

// Public side | Services Page
// Route::get('/service', [ServiceController::class, 'publicIndex'])->name('services.public');
// Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('services.public.show');


// Public side | Services Static Pages
// Web Development Routes
Route::get('/web-service', function () {
    return view('pages.services.website.web');
})->name('services.web');

Route::get('/website-development', function () {
    return view('pages.services.website.website_development');
})->name('services.web_dev');

Route::get('/content-writing', function () {
    return view('pages.services.website.content_writing');
})->name('services.content_writing');

Route::get('/ecommerce-development', function () {
    return view('pages.services.website.ecommerce_development');
})->name('services.ecommerce_development');

Route::get('/shopify-development', function () {
    return view('pages.services.website.shopify_development');
})->name('services.shopify_development');

Route::get('/website-design', function () {
    return view('pages.services.website.website_design');
})->name('services.website_design');

Route::get('/website-maintenance', function () {
    return view('pages.services.website.website_maintainance');
})->name('services.website_maintainance');

Route::get('/wordpress-development', function () {
    return view('pages.services.website.wordpress_development');
})->name('services.wordpress_development');


// Google Ads Management Routes
Route::get('/google-ads-management', function () {
    return view('pages.services.google_ads.google_ads_management');
})->name('services.google_ads_management');

Route::get('/amazon-marketing', function () {
    return view('pages.services.google_ads.amazon_marketing');
})->name('services.amazon_marketing');

Route::get('/ppc', function () {
    return view('pages.services.google_ads.ppc');
})->name('services.ppc');

Route::get('/google-shopping-ads', function () {
    return view('pages.services.google_ads.google_shopping_ads');
})->name('services.google_shopping_ads');
//new
Route::get('/lead-generation', function () {
    return view('pages.services.google_ads.lead_generation');
})->name('services.lead_generation');
//CRM Development
Route::get('/crm-development', function () {
    return view('pages.services.crm_development');
})->name('services.crm_development');



// SEO Services Routes
Route::get('/seo-service', function () {
    return view('pages.services.seo.seo');
})->name('services.seo');

Route::get('/content-marketing', function () {
    return view('pages.services.seo.content_marketing');
})->name('services.content_marketing');

Route::get('/google-business-profile-seo', function () {
    return view('pages.services.seo.google_business_profile_seo');
})->name('services.google_business_profile_seo');

Route::get('/seo-audit', function () {
    return view('pages.services.seo.seo_audit');
})->name('services.seo-audit');

Route::get('/ecommerce-seo', function () {
    return view('pages.services.seo.ecommerce_seo');
})->name('services.ecommerce_seo');

// new 
Route::get('/page-optimization', function () {
    return view('pages.services.seo.page_optimization');
})->name('services.page_optimization');

Route::get('/google-business-profile-seo', function () {
    return view('pages.services.seo.google_business_profile_seo');
})->name('services.google_business_profile_seo');

Route::get('/link-building', function () {
    return view('pages.services.seo.link_building');
})->name('services.link_building');

Route::get('/technical-seo', function () {
    return view('pages.services.seo.technical_seo');
})->name('services.technical_seo');

Route::get('/guest-posting', function () {
    return view('pages.services.seo.guest_posting');
})->name('services.guest_posting');

Route::get('/local-seo', function () {
    return view('pages.services.seo.local_seo');
})->name('services.local_seo');

Route::get('/app-store-optimization', function () {
    return view('pages.services.seo.app_store_optimization');
})->name('services.app_store_optimization');

Route::get('/play-store-seo', function () {
    return view('pages.services.seo.play_store_seo');
})->name('services.play_store_seo');


// Graphic Design Routes
Route::get('/graphic-design', function () {
    return view('pages.services.graphic_design.graphic');
})->name('services.graphic');

Route::get('/logo-design', function () {
    return view('pages.services.graphic_design.logo_design');
})->name('services.logo_design');

Route::get('/leaflet-design', function () {
    return view('pages.services.graphic_design.leaflet_design');
})->name('services.leaflet_design');

Route::get('/brochure-design', function () {
    return view('pages.services.graphic_design.brochure_design');
})->name('services.brochure_design');


// Social Media Marketing Routes
Route::get('/social-media-marketing', function () {
    return view('pages.services.social_media_marketing.smm');
})->name('services.smm');

Route::get('/facebook-advertising', function () {
    return view('pages.services.social_media_marketing.facebook_advertising');
})->name('services.facebook_advertising');

Route::get('/linkedin-advertising', function () {
    return view('pages.services.social_media_marketing.linkedin_advertising');
})->name('services.linkedin_advertising');

Route::get('/pinterest-advertising', function () {
    return view('pages.services.social_media_marketing.pinterest_advertising');
})->name('services.pinterest_advertising');

Route::get('/instagram-advertising', function () {
    return view('pages.services.social_media_marketing.instagram_advertising');
})->name('services.instagram_advertising');

Route::get('/twitter-advertising', function () {
    return view('pages.services.social_media_marketing.twitter_advertising');
})->name('services.twitter_advertising');

Route::get('/youtube-ads', function () {
    return view('pages.services.social_media_marketing.youtube_ads');
})->name('services.youtube_ads');

Route::get('/tiktok-ads', function () {
    return view('pages.services.social_media_marketing.tiktok_ads');
})->name('services.tiktok_ads');

Route::get('/snap-chat-ads', function () {
    return view('pages.services.social_media_marketing.snap_chat_ads');
})->name('services.snap_chat_ads');

Route::get('/whatsapp-marketing', function () {
    return view('pages.services.social_media_marketing.whatsapp_marketing');
})->name('services.whatsapp_marketing');


// Mobile App Development Routes
Route::get('/mobileapp-service', function () {
    return view('pages.services.mobile_application.mobile');
})->name('services.mobile');

Route::get('/android-app', function () {
    return view('pages.services.mobile_application.android_app');
})->name('services.android_app');

Route::get('/react-native-app', function () {
    return view('pages.services.mobile_application.react_native_app');
})->name('services.react_native_app');

Route::get('/hybrid-app', function () {
    return view('pages.services.mobile_application.hybrid_app');
})->name('services.hybrid_app');

Route::get('/app-maintenance', function () {
    return view('pages.services.mobile_application.app_maintenance');
})->name('services.app_maintenance');

Route::get('/Iphone-app', function () {
    return view('pages.services.mobile_application.iphone_app');
})->name('services.iphone_app');

Route::get('/flutter-app', function () {
    return view('pages.services.mobile_application.flutter_app');
})->name('services.flutter_app');

Route::get('/wearable-app', function () {
    return view('pages.services.mobile_application.wearable_app ');
})->name('services.wearable_app');

Route::get('/mobile-app-developers', function () {
    return view('pages.services.mobile_application.mobile_app_developers');
})->name('services.mobile_app_developers');

// Videography Service Route: services.videography
Route::get('/videography', function () {
    return view('pages.services.videography');
})->name('services.videography');



// Ai Marketing Pages
Route::get('/ai-marketing', function () {
    return view('pages.ai_marketing.ai_marketing');
})->name('ai_marketing');

Route::get('/ai-social-media', function () {
    return view('pages.ai_marketing.ai_social_media');
})->name('ai_social_media');

Route::get('/ai-website', function () {
    return view('pages.ai_marketing.ai_website');
})->name('ai_website');

Route::get('/ai-digital-marketing', function () {
    return view('pages.ai_marketing.ai_digital_marketing');
})->name('ai_digital_marketing');

Route::get('/ai-seo', function () {
    return view('pages.ai_marketing.ai_seo');
})->name('ai_seo');

Route::get('/ai-google-ads', function () {
    return view('pages.ai_marketing.ai_google_ads');
})->name('ai_google_ads');

Route::get('/ai-web-app', function () {
    return view('pages.ai_marketing.ai_web_app');
})->name('ai_web_app');


// Public side | Career Page
Route::get('/career', [CareerController::class, 'publicIndex'])->name('careers.public');

// Public side | Privacy Policy
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

// Public side | Cookie Policy
Route::get('/cookie-policy', function () {
    return view('pages.cookie');
})->name('cookie');

// Public side | Customer Pages
Route::get('/customer', [CustomerController::class, 'publicIndex'])->name('customers.public');

// Public side | Portfolio Pages
Route::get('/portfolio', [PortfolioController::class, 'publicIndex'])->name('portfolio.public');
Route::get('/portfolio/{title}-{id}', [PortfolioController::class, 'publicShow'])
    ->where([
        'title' => '[A-Za-z0-9\-]+', // only letters, numbers, hyphens
        'id' => '[0-9]+'
    ])
    ->name('portfolio.public.show');
Route::get('/portfolio/case-study/{title}-{id}', [PortfolioController::class, 'caseStudy'])
    ->where([
        'title' => '[A-Za-z0-9\-]+', // only letters, numbers, hyphens
        'id' => '[0-9]+'
    ])->name('portfolio.case_study');

// Public Side | SeoRequest
Route::get('/seo-request', [SeoRequestController::class, 'publicIndex'])->name('seo-request.public');

// Admin Dashboard Routes
Route::middleware(['role:superadmin,admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    // blog controller
    Route::resource('blogs', BlogController::class);
    Route::get('/blogs-create', [BlogController::class, 'create'])->name('blogs.create');

    // customer controller
    Route::resource('customers', CustomerController::class);

    // Industry controller  
    Route::resource('industries', IndustryController::class);

    // Career Controller
    Route::resource('careers', CareerController::class);

    // Team Controller
    Route::resource('team', TeamController::class);

    // Portfolio
    Route::resource('portfolios', PortfolioController::class);

    // Contact 
    Route::resource('contacts', ContactController::class);

    // Seo Request
    Route::resource('seo-requests', SeoRequestController::class);

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


require __DIR__ . '/auth.php';
