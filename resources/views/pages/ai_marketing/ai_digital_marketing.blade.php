@extends('layouts.homelayout')

@section('title', 'AI Digital Marketing - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/ai_service.css') }}">

<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

    <!-- Hero Title -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text">
            AI Digital Marketing
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            WB-DIGITECH leverages AI-powered strategies to optimize your digital campaigns, improve engagement, and maximize ROI.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

 <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/ai_imgs/AidigitalMarketing-01.webp') }}"
                 alt="ai-digital-marketing"
                 class="hero-image">
        </div>
    </div>

<br><br>

    <!-- Content & Sidebar -->
    <div class="container-flex">

        <!-- Sidebar -->
        <div class="sidebar-col">
            <div class="sidebar">
                <h6>Our AI Services</h6>
                <ul>
                    <li><a href="{{ route('ai_marketing') }}">AI Marketing Overview</a></li>
                    <li class="current-menu-item"><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></li>
                    <li><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a></li>
                    <li><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                    <li><a href="{{ route('ai_seo') }}">AI SEO Services</a></li>
                    <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

              
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>Use AI-powered strategies for digital campaigns including email, PPC, content marketing, and analytics to optimize performance and maximize ROI.</p>

            <h2>Key Features</h2>
            <ul>
                <li>AI Campaign Management</li>
                <li>Target Audience Analysis</li>
                <li>Automated Content Creation</li>
                <li>Predictive Analytics</li>
                <li>Performance Optimization</li>
            </ul>

            <h2>Benefits</h2>
            <p>Increase reach and engagement across channels, save time with automation, improve conversions, and make data-driven decisions with AI insights.</p>

            <h2>Our Services</h2>
            <div class="services-list">
                <ul>
                    <li>AI Digital Marketing</li>
                    <li>AI Social Media Marketing</li>
                    <li>AI Website Services</li>
                    <li>AI SEO Services</li>
                    <li>AI Google Ads Management</li>
                    <li>AI Web Applications</li>
                </ul>
            </div>

            <h2>How We Work</h2>
            <div class="process-list">
                <ol>
                    <li><strong>Strategy:</strong> Define goals, target audience, and KPIs for AI campaigns.</li>
                    <li><strong>Content & Creative:</strong> Generate AI-driven content and creatives optimized for engagement.</li>
                    <li><strong>Campaign Execution:</strong> Launch AI-optimized campaigns across channels.</li>
                    <li><strong>Analytics & Reporting:</strong> Monitor performance with AI insights and predictive analytics.</li>
                    <li><strong>Optimization:</strong> Continuously improve campaigns using AI-driven recommendations.</li>
                </ol>
            </div>


        </div>
    </div>
</div>
@endsection
