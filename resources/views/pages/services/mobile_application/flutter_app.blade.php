@extends('layouts.homelayout')

@section('title', 'Mobile App Development - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text">
            Flutter App Development
        </h2>
    </div>

    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Build engaging iOS & Android apps that scale — native, cross-platform, 
            and enterprise solutions focused on performance and conversions.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact') }}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

            <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/new_images/WEBimagesWBmobileapp-01.webp') }}" alt="mobile-app" class="hero-image">
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
                    <li><a href="{{ route('services.mobile') }}">Mobile App Development</a></li>
                    <li><a href="{{ route('services.android_app') }}">Android App Development</a></li>
                    <li><a href="{{ route('services.react_native_app') }}">React Native App Development</a></li>
                    <li><a href="{{ route('services.hybrid_app') }}">Hybrid App Development</a></li>
                    <li><a href="{{ route('services.app_maintenance') }}">App Maintenance</a></li>
                    <li><a href="{{ route('services.iphone_app') }}">iPhone App Development</a></li>
                    <li  class="current-menu-item"><a href="{{ route('services.flutter_app') }}">Flutter App Development</a></li>
                    <li><a href="{{ route('services.wearable_app') }}">Wearable App Development</a></li>
                    <li><a href="{{ route('services.mobile_app_developers') }}">Hire Mobile App Developers</a></li>
                </ul>


                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    {{-- <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/mobile-app-deveopment-1024x946.png" alt="Mobile App">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/mobile-application-1024x974.png" alt="Mobile Application">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/mobile-application-1024x974.png" alt="Mobile Development Team"> --}}
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">
            <h2>Mobile App Development Services</h2>
            <p>Mobile apps allow you to engage users anytime, anywhere. We build and iterate on apps aligned to your mobile strategy using proven frameworks and best practices.</p>

            <h5>Our mobile app development services include:</h5>
            <div class="services-list">
                <ul>
                    <li>Native iOS apps built with Swift</li>
                    <li>Native Android apps built with Java/Kotlin</li>
                    <li>Cross-platform apps using React Native or Flutter</li>
                    <li>Prototyping and wireframing</li>
                    <li>UI/UX design focused on usability</li>
                    <li>Integration with device capabilities like camera, GPS</li>
                    <li>Backend integration and cloud services</li>
                    <li>App store publishing and release</li>
                    <li>Performance monitoring and optimization</li>
                </ul>
            </div>

            <h2>Our Process</h2>
            <p>We follow a structured mobile app development process:</p>
            <div class="process-list">
                <ol>
                    <li><strong>Strategy:</strong> Align on goals, platform considerations, customer needs, and app capabilities.</li>
                    <li><strong>Wireframes:</strong> Map out user flows and structure based on priorities.</li>
                    <li><strong>Design:</strong> Create an engaging, on-brand UI optimized for platform guidelines.</li>
                    <li><strong>Development:</strong> Build a working app with native frameworks or cross-platform tools.</li>
                    <li><strong>Testing:</strong> Rigorously test across devices to ensure quality and performance.</li>
                    <li><strong>Launch:</strong> Release on the App Store and Play Store, then continuously iterate.</li>
                </ol>
            </div>
            <p>Throughout the process, we focus on bringing working features fast with continuous delivery and improvement.</p>

            <h2>Our Benefits</h2>
            <div class="benefits-list">
                <ul>
                    <li>Reach users anytime, anywhere</li>
                    <li>Increased engagement and retention</li>
                    <li>New revenue potential through apps</li>
                    <li>Competitive differentiation</li>
                    <li>Higher brand loyalty and recall</li>
                    <li>Improved customer experience</li>
                    <li>Offline usage and performance</li>
                </ul>
            </div>

            <h2>Technologies We Use</h2>
            <p>For mobile development, we create native iOS apps with Swift and native Android apps using Kotlin. For cross-platform mobile solutions, we leverage React Native and other emerging frameworks.</p>

            {{-- <img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/mobile-application-1024x974.png" alt="Mobile Application"> --}}
        </div>
    </div>
</div>
@endsection
