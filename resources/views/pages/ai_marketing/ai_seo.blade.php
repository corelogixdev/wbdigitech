@extends('layouts.homelayout')

@section('title', 'AI-Powered SEO - WB-DIGITECH')

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
            AI-Powered SEO
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Enhance your website’s search performance with AI-powered SEO. Leverage intelligent keyword targeting, content optimization, and predictive analytics to stay ahead in search rankings.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

 <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/ai_imgs/AIpoweredSEO-01.webp') }}"
                 alt="ai-seo-services"
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
                    <li class="current-menu-item"><a href="{{ route('ai_seo') }}">AI-Powered SEO</a></li>
                    <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

            
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>AI-powered SEO combines artificial intelligence, machine learning, and predictive analytics to optimize your website for search engines more efficiently than traditional methods. From keywords to content strategy, AI analyzes patterns to improve rankings.</p>

            <h2>Key Features</h2>
            <ul>
                <li>AI Keyword Discovery & Prioritization</li>
                <li>Automated Content Optimization</li>
                <li>Predictive Search Ranking Analysis</li>
                <li>Competitive Analysis using AI Insights</li>
                <li>Automated SEO Performance Reporting</li>
            </ul>

            <h2>Benefits</h2>
            <p>Increase organic traffic, enhance visibility, save time on optimization, and make data-driven decisions using AI insights for continuous SEO improvement.</p>

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
                    <li><strong>AI SEO Audit:</strong> Analyze website structure, content, and backlinks using AI tools.</li>
                    <li><strong>Smart Keyword Research:</strong> Identify high-impact keywords and opportunities with AI predictions.</li>
                    <li><strong>Content & On-page Optimization:</strong> Optimize pages for better rankings using AI suggestions.</li>
                    <li><strong>Monitoring & Analytics:</strong> Track performance, ranking, and traffic automatically.</li>
                    <li><strong>Continuous AI Improvement:</strong> Refine SEO strategy with AI insights for sustained results.</li>
                </ol>
            </div>

          
        </div>
    </div>
</div>
@endsection
