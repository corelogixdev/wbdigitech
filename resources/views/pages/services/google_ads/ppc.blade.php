@extends('layouts.homelayout')

@section('title', 'Website Design & Development - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">


<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

                                        <!-- Hero Title -->
                                        <div class="tp-hero-title-wrap mb-35 text-center">
                                            <h2 class="tp-hero-title gradient-text">
                                                Pay Per Click (PPC)
                                            </h2>
                                        </div>
                                        <div></div>
                                        <!-- Hero Content -->
                                        <div class="tp-hero-content text-center">
                                            <p class="delay-load">
                                                WB DIGITECH provides high-quality website development services — 
                                                responsive, SEO-optimized, and tailored to your business needs.
                                            </p>
                                            <div class="hero-btns mt-4">
                                                <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/google_ads/pay_per_click.webp') }}" alt="Google Ads Management" class="hero-image">
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
                    <li><a href="{{ route('services.google_ads_management') }}">Google Ads Management</a></li>
                    <li><a href="{{ route('services.amazon_marketing') }}">Amazon Marketing</a></li>
                    <li  class="current-menu-item"><a href="{{ route('services.ppc') }}">PPC (Pay-Per-Click)</a></li>
                    <li><a href="{{ route('services.google_shopping_ads') }}">Google Shopping Ads</a></li>
                </ul>



               
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">
            <h2>Quality Website Development Services</h2>
            <p>WB DIGITECH is a leading web development firm with highly skilled developers based in Dubai. We transform your vision into reality with tailored websites — from e-commerce to custom web applications.</p>

            <h2>Responsive Website Design</h2>
            <p>We create responsive websites that look perfect on desktops, tablets, and mobiles. With Google prioritizing mobile-first indexing, responsive design ensures better conversions and engagement.</p>

            <h2>CMS-based Website Development</h2>
            <p>Our CMS expertise includes WordPress, Drupal, Joomla, and custom-built platforms — empowering you to manage content with ease.</p>

            <h2>E-Commerce Website Development</h2>
            <p>We build scalable e-commerce platforms with payment gateway integration, logistics solutions, and a user-friendly CMS to manage products and sales.</p>

            <h2>SEO Optimized Websites</h2>
            <p>Every site we build is SEO-ready to rank on Google. Combined with our SEO services, your website will dominate search results and drive conversions.</p>

            <h2>Our Services</h2>
            <div class="services-list">
                <ul>
                    <li>Website Design & Development</li>
                    <li>Mobile App Development</li>
                    <li>Social Media Marketing</li>
                    <li>Digital Campaigns</li>
                    <li>Search Engine Optimization (SEO)</li>
                    <li>Graphic Designing</li>
                </ul>
            </div>

            <h2>Web Development Roadmap</h2>
            <div class="process-list">
                <ol>
                    <li><strong>Strategy:</strong> Define goals, requirements, and target audience.</li>
                    <li><strong>Wireframes & Design:</strong> Create structure, flows, and UI/UX mockups.</li>
                    <li><strong>Development:</strong> Build using CMS, frameworks, or custom coding.</li>
                    <li><strong>Testing:</strong> Ensure cross-device and browser compatibility.</li>
                    <li><strong>Launch:</strong> Deploy, optimize, and maintain performance.</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection
