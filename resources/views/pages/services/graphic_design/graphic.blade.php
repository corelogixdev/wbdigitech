@extends('layouts.homelayout')

@section('title', 'Graphic Designing - WB-DIGITECH')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <!-- Spacer below header -->
        <div style="padding: 80px"></div>

        <!-- Hero Section -->
        <div class="tp-hero-title-wrap mb-35 text-center">
            <h2 class="tp-hero-title gradient-text">
                Graphic Design Services
            </h2>
        </div>
        <div class="tp-hero-content text-center">
            <p class="delay-load">
                Elevate your brand with professional logo, print, web, and identity design services tailored to your
                business.
            </p>
            <div class="hero-btns mt-4">
                <a href="{{ route('contact') }}" class="btn btn-gradient">Get a Free Quote</a>
            </div>
        </div>

        <!-- Hero Image Section -->
        <div class="hero-image-section">
            <div class="hero-image-container">
                <img src="{{ asset('css/new-assets/graphic_design/brochure.webp') }}" alt="graphic-design"
                    class="hero-image">
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
                        <li class="current-menu-item"><a href="{{ route('services.graphic') }}">Graphic Design</a></li>
                        <li><a href="{{ route('services.logo_design') }}">Logo Design</a></li>
                        <li><a href="{{ route('services.leaflet_design') }}">Leaflet Design</a></li>
                        <li><a href="{{ route('services.brochure_design') }}">Brochure Design</a></li>
                    </ul>


                </div>
            </div>

            <!-- Content -->
            <div class="content-col">

                <h2>Logo & Identity Design</h2>
                <p>Our brand is represented by the logo. Our team of skilled and seasoned logo designers is dedicated to
                    approaching each logo design project with creativity and thorough consideration. As a reputable branding
                    agency in Pakistan, we specialize in creating high-quality logos and brand identities for well-known
                    companies. This is our area of expertise.</p>

                <h2>Print Design</h2>
                <p>Our print design services ensure that your business cards, letterheads, envelopes, brochures, and other
                    marketing materials stand out in sales meetings, face-to-face encounters, and direct mailings, making a
                    significant impact on your company’s image.</p>

                <h2>Web Design (UX/UI)</h2>
                <p>WB-DIGITECH offers top-notch web, UI, and UX design services for both B2B and B2C websites. Our team
                    ensures pixel-perfect designs with a responsive approach to guarantee compatibility across all devices,
                    setting your website apart from competitors. By utilizing our services, you can enhance revenue,
                    increase brand engagement, and achieve higher conversion rates with tangible outcomes.</p>

                <h2>Brand & Stationery Design</h2>
                <p>We provide an extensive selection of premium brand identity design solutions, stationery design
                    solutions, corporate rebranding solutions, brand guidelines solutions, and branding consultation.
                    Establishing a strong brand identity is crucial in marketing, which is why our committed team is
                    dedicated to crafting a visually appealing brand for you. WB-DIGITECH is the ultimate creative brand
                    agency to elevate your brand’s image.</p>

                <h2>Our Design Services</h2>
                <ul class="service-list">
                    <li>Advertising Services</li>
                    <li>Corporate Identity Design</li>
                    <li>Characters and Mascots Design</li>
                </ul>

            </div>
        </div>
    </div>
@endsection