@extends('layouts.homelayout')

@section('title', 'AI Web Applications - WB-DIGITECH')

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
            AI Web Applications
        </h2>
    </div>

    <!-- Hero Content -->
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Build intelligent web applications powered by AI. Enhance user experience, automate processes, and gain insights with AI-driven solutions.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

 <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/ai_imgs/AIwebApplication-01.webp') }}"
                 alt="ai-web-applications"
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
                    <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                    <li class="current-menu-item"><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                </ul>

              
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Overview</h2>
            <p>AI web applications leverage machine learning and automation to provide smarter, faster, and more personalized user experiences, while streamlining backend processes.</p>

            <h2>Key Features</h2>
            <ul>
                <li>AI-Powered User Personalization</li>
                <li>Intelligent Data Analytics & Insights</li>
                <li>Automated Workflows</li>
                <li>Predictive Modelling & Decision Support</li>
                <li>Seamless Integration with AI APIs</li>
            </ul>

            <h2>Benefits</h2>
            <p>Enhance user engagement, improve operational efficiency, and make data-driven decisions with intelligent web applications powered by AI.</p>

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
                    <li><strong>Requirements Analysis:</strong> Understand business goals and user needs.</li>
                    <li><strong>Design & Prototyping:</strong> Create intelligent workflows and user interfaces.</li>
                    <li><strong>AI Integration:</strong> Incorporate AI models for personalization, analytics, and automation.</li>
                    <li><strong>Testing & Optimization:</strong> Ensure seamless functionality and AI performance.</li>
                    <li><strong>Deployment & Support:</strong> Launch applications with ongoing AI updates and enhancements.</li>
                </ol>
            </div>


        </div>
    </div>
</div>
@endsection
