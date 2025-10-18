@extends('layouts.homelayout')

@section('title', 'AI Social Media Marketing - WB-DIGITECH')

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
            AI Social Media Marketing
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Enhance your social media presence with AI-powered strategies, automated content creation, and data-driven campaign optimization.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

    <!-- Content & Sidebar -->
    <div class="container-flex">

        <!-- Sidebar -->
        <div class="sidebar-col">
            <div class="sidebar">
                <h6>Our AI Services</h6>
                <ul>
                    <li><a href="{{ route('ai_marketing') }}">AI Marketing Overview</a></li>
                    <li><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></li>
                    <li class="current-menu-item"><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a></li>
                    <li><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                    <li><a href="{{ route('ai_seo') }}">AI SEO Services</a></li>
                    <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    <img src="#" alt="AI Social Media Image 1">
                    <img src="#" alt="AI Social Media Image 2">
                    <img src="#" alt="AI Social Media Image 3">
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>AI-driven social media marketing helps you identify the best content, schedule posts, and reach the right audience with minimal effort.</p>

            <h2>Key Features</h2>
            <ul>
                <li>Automated Content Scheduling</li>
                <li>Audience Targeting & Segmentation</li>
                <li>Social Listening & Analytics</li>
                <li>AI-Generated Creative Content</li>
                <li>Performance Optimization</li>
            </ul>

            <h2>Benefits</h2>
            <p>Boost engagement, grow your followers, save time with AI automation, and make data-driven social media decisions.</p>

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
                    <li><strong>Strategy:</strong> Define social media goals and KPIs.</li>
                    <li><strong>Content Creation:</strong> Generate posts and creatives using AI.</li>
                    <li><strong>Scheduling & Automation:</strong> Plan and automate posting across platforms.</li>
                    <li><strong>Analytics & Insights:</strong> Monitor engagement and optimize campaigns.</li>
                    <li><strong>Optimization:</strong> Adjust strategies for better reach and conversions.</li>
                </ol>
            </div>

            <img class="service-img" src="#" alt="AI Social Media Marketing Image">

        </div>
    </div>
</div>
@endsection
