@extends('layouts.homelayout')

@section('title', 'SEO Services - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text">
            Search Engine Optimization (SEO)
        </h2>
    </div>
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Get ranked higher, drive organic traffic, and grow your business with 
            WB DIGITECH’s proven SEO strategies.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact') }}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

            <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/new_images/WEBimagesWBSEO-01.webp') }}" alt="seo" class="hero-image">
            {{-- <div class="hero-overlay"></div> --}}
        </div>
    </div>
<br>
<br>

    <!-- Content & Sidebar -->
    <div class="container-flex">
        
        <!-- Sidebar -->
        <div class="sidebar-col">
            <div class="sidebar">
                <h6>Our Services</h6>
                <ul>
                    <li class="current-menu-item"><a href="{{ route('services.seo') }}">SEO Services</a></li>
                    <li><a href="{{ route('services.content_marketing') }}">Content Marketing</a></li>
                    <li><a href="{{ route('services.google_business_profile_seo') }}">Google Business Profile SEO</a></li>
                    <li><a href="{{ route('services.seo-audit') }}">SEO Audit</a></li>
                    <li><a href="{{ route('services.ecommerce_seo') }}">E-commerce SEO</a></li>
                    <li><a href="{{ route('services.page_optimization') }}">Page Optimization</a></li>
                    <li><a href="{{ route('services.link_building') }}">Link Building</a></li>
                    <li><a href="{{ route('services.technical_seo') }}">Technical SEO</a></li>
                    <li><a href="{{ route('services.guest_posting') }}">Guest Posting</a></li>
                    <li><a href="{{ route('services.local_seo') }}">Local SEO</a></li>
                    <li><a href="{{ route('services.app_store_optimization') }}">App Store Optimization</a></li>
                    <li><a href="{{ route('services.play_store_seo') }}">Play Store SEO</a></li>
                </ul>

                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    {{-- <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/seo-optimization.png" alt="SEO Optimization">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/seo-results.png" alt="SEO Results">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/seo-marketing.png" alt="SEO Marketing"> --}}
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">
            <h2>What WB-DIGITECH Can Do for You?</h2>
            <p>Our specialists help you get ranked higher by making your website SEO-friendly and your content worthy of featured positions.</p>

            <h2>Effective On-Page SEO</h2>
            <p>Sure, webpage structure and its content is just a piece of the SEO puzzle — but a very important one. Our proven techniques allow us to perform best-in-class on-page optimization.</p>
            <p>With detailed web analysis, our team ensures that the pages meant for the public can be found by search engines. Effective keyword targeting is the key to growing traffic and revenue. We’ll identify top-performing keywords in your industry and add them to the appropriate pages of your website.</p>

            <h2>Real Results</h2>
            <p>We give our clients complete access to important reports (web analytics, CTR, SEO, social media campaigns, etc.) so they can see real results and analyze their business growth.</p>

            <h2>Optimization</h2>
            <p>We don’t just promise; we deliver. Our expert team helps clients see maximum ROI on their investment by handling technical issues that could be hurting their rankings and search visibility.</p>

            <h2>Effective SERP Strategies</h2>
            <p>Good business deserves to be found online. Turbocharge your online marketing efforts with our effective SERP tracking that promotes your business in search results and brings in new customers.</p>

            <h2>Effective Off-Page SEO Strategies</h2>
            <p>Being a premier SEO company, we focus on the quality of links rather than the quantity. Our marketing is powered by valuable industry citations from reliable sources including trade associations and niche directories.</p>
            <p>We also create valuable content that not only establishes your brand’s authority but also provides opportunities for top websites to link back to you.</p>

            <h2>Detailed Transparent Reporting</h2>
            <p>When you invest in SEO services, you have every right to know what you’re paying for. We keep you in the loop at every step of the journey. Detailed reports on your search rankings with position updates and screenshots are provided every 24 hours.</p>
            <p>We also provide a monthly report on all the quality links acquired for your website so you always stay informed.</p>

            {{-- <img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/seo-optimization.png" alt="SEO Service Image"> --}}
        </div>
    </div>
</div>
@endsection
