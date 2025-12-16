@extends('layouts.homelayout')

@section('title', 'AI Google Ads Management - WB-DIGITECH')

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
            AI Google Ads Management
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Maximize your PPC campaigns using AI-powered Google Ads management. Improve targeting, bid optimization, and ROI with intelligent automation.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

 <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/ai_imgs/GoogleAdsMangement-01.webp') }}"
                 alt="ai-google-ads-management"
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
                    <li><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></li>
                    <li><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a></li>
                    <li><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                    <li><a href="{{ route('ai_seo') }}">AI-Powered SEO</a></li>
                    <li class="current-menu-item"><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

               
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>AI Google Ads management automates and optimizes your PPC campaigns, ensuring you reach the right audience at the right time with the best bidding strategy.</p>

            <h2>Key Features</h2>
            <ul>
                <li>AI-Powered Bid Optimization</li>
                <li>Intelligent Targeting & Segmentation</li>
                <li>Automated Ad Creation</li>
                <li>Predictive Analytics for Campaign Success</li>
                <li>Real-Time Performance Reporting</li>
            </ul>

            <h2>Benefits</h2>
            <p>Increase CTR, reduce wasted spend, improve conversions, and maximize ROI using AI-driven Google Ads automation and insights.</p>

            <h2>Our AI Services</h2>
            <div class="services-list">
                <ul>
                    <li>AI Digital Marketing</li>
                    <li>AI Social Media Marketing</li>
                    <li>AI Website Services</li>
                    <li>AI-Powered SEO</li>
                    <li>AI Google Ads Management</li>
                    <li>AI Web Applications</li>
                </ul>
            </div>

            <h2>How We Work</h2>
            <div class="process-list">
                <ol>
                    <li><strong>Campaign Audit:</strong> Analyze current Google Ads campaigns using AI insights.</li>
                    <li><strong>Keyword & Audience Targeting:</strong> Optimize targeting based on AI predictions.</li>
                    <li><strong>Automated Ad Creation:</strong> Generate high-performing ads with AI.</li>
                    <li><strong>Performance Monitoring:</strong> Track results and adjust campaigns automatically.</li>
                    <li><strong>Continuous Optimization:</strong> AI recommendations for ongoing improvement.</li>
                </ol>
            </div>

            
        </div>
    </div>
</div>
@endsection
