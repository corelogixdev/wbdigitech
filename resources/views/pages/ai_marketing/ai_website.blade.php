@extends('layouts.homelayout')

@section('title', 'AI Website Services - WB-DIGITECH')

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
            AI Website Services
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Build intelligent, AI-powered websites that adapt to user behavior, optimize performance, and provide a personalized experience.
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
                    <li><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a></li>
                    <li class="current-menu-item"><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                    <li><a href="{{ route('ai_seo') }}">AI SEO Services</a></li>
                    <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    <img src="#" alt="AI Website Image 1">
                    <img src="#" alt="AI Website Image 2">
                    <img src="#" alt="AI Website Image 3">
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>Our AI Website Services provide dynamic, user-focused websites using AI technology for personalization, automation, and performance optimization.</p>

            <h2>Key Features</h2>
            <ul>
                <li>AI-Powered Personalization</li>
                <li>Smart Content Recommendations</li>
                <li>Automated Website Optimization</li>
                <li>Analytics and User Behavior Tracking</li>
                <li>Responsive & Adaptive Design</li>
            </ul>

            <h2>Benefits</h2>
            <p>Create smarter websites that improve user engagement, enhance conversions, reduce manual intervention, and deliver actionable insights.</p>

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
                    <li><strong>Strategy:</strong> Define website goals, audience, and KPIs.</li>
                    <li><strong>AI Design & Development:</strong> Build adaptive and responsive website frameworks.</li>
                    <li><strong>Content Optimization:</strong> Use AI to personalize and recommend content to users.</li>
                    <li><strong>Analytics & Insights:</strong> Track visitor behavior and optimize for engagement.</li>
                    <li><strong>Continuous Improvement:</strong> Enhance UX and performance using AI-driven data.</li>
                </ol>
            </div>

            <img class="service-img" src="#" alt="AI Website Services Image">

        </div>
    </div>
</div>
@endsection
