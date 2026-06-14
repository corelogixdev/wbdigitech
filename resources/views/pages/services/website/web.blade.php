@extends('layouts.homelayout')

@section('title', 'Website Design & Development - WB-DIGITECH')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/web_imgs/webDevelopment.webp" 
            title="Website Design & Development"
            description="WB DIGITECH provides high-quality website development services — responsive, SEO-optimized, and tailored to your business needs."
            serviceCategory="Web Development"
            serviceName="Web Development"
        >
        </x-service-hero>    </div>
    </div>

    <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/web_imgs/webDevelopment.webp') }}" alt="website-development"
                class="hero-image">
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
                    <li class="current-menu-item"><a href="{{ route('services.web') }}">Website Services</a></li>
                    <li><a href="{{ route('services.web_dev') }}">Website Development</a></li>
                    <li><a href="{{ route('services.content_writing') }}">Content Writing</a></li>
                    <li><a href="{{ route('services.ecommerce_development') }}">E-commerce Development</a></li>
                    <li><a href="{{ route('services.shopify_development') }}">Shopify Development</a></li>
                    <li><a href="{{ route('services.website_design') }}">Website Design</a></li>
                    <li><a href="{{ route('services.website_maintainance') }}">Website Maintenance</a></li>
                    <li><a href="{{ route('services.wordpress_development') }}">WordPress Development</a></li>
                </ul>


                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    {{-- <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/responsive-web-design.png"
                        alt="Responsive Web Design">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/cms-web-development.png"
                        alt="CMS Web Development">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/ecommerce-web-development.png"
                        alt="E-commerce Web Development"> --}}
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

<x-service-content-card title="Quality Website Development Services">
<p>WB DIGITECH is a leading web development firm with highly skilled developers based in Dubai. We transform
                your vision into reality with tailored websites — from e-commerce to custom web applications.</p>

</x-service-content-card>

<x-service-content-card title="Responsive Website Design">
<p>We create responsive websites that look perfect on desktops, tablets, and mobiles. With Google prioritizing
                mobile-first indexing, responsive design ensures better conversions and engagement.</p>

</x-service-content-card>

<x-service-content-card title="CMS-based Website Development">
<p>Our CMS expertise includes WordPress, Drupal, Joomla, and custom-built platforms — empowering you to manage
                content with ease.</p>

</x-service-content-card>

<x-service-content-card title="E-Commerce Website Development">
<p>We build scalable e-commerce platforms with payment gateway integration, logistics solutions, and a
                user-friendly CMS to manage products and sales.</p>

</x-service-content-card>

<x-service-content-card title="SEO Optimized Websites">
<p>Every site we build is SEO-ready to rank on Google. Combined with our SEO services, your website will
                dominate search results and drive conversions.</p>

</x-service-content-card>

<x-service-content-card title="Our Services">
<div class="services-list">
                <ul>
                    <li>Website Design &amp; Development</li>
                    <li>Mobile App Development</li>
                    <li>Social Media Marketing</li>
                    <li>Digital Campaigns</li>
                    <li>Search Engine Optimization (SEO)</li>
                    <li>Graphic Designing</li>
                </ul>
            </div>

</x-service-content-card>

<x-service-content-card title="Web Development Roadmap">
<div class="process-list">
                <ol>
                    <li><strong>Strategy:</strong> Define goals, requirements, and target audience.</li>
                    <li><strong>Wireframes &amp; Design:</strong> Create structure, flows, and UI/UX mockups.</li>
                    <li><strong>Development:</strong> Build using CMS, frameworks, or custom coding.</li>
                    <li><strong>Testing:</strong> Ensure cross-device and browser compatibility.</li>
                    <li><strong>Launch:</strong> Deploy, optimize, and maintain performance.</li>
                </ol>
            </div>
{{--
<img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/responsive-web-design.png" alt="Web Development Image">
--}}

</x-service-content-card>

</div>
    </div>
    </div>
@endsection