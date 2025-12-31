@extends('layouts.homelayout')

@section('title', 'About US - WB-DIGITECH')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div id="main-content">
                    <div class="ck-content">
                        <div class="tp-hero-area tp-hero-ptb main-slider">
                            <div class="container-fluid home-main-slider">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-12">
                                        <div class="tp-hero-title-wrap mb-35 p-relative">
                                            <div class="tp-hero-shape-1 d-none"><img src={{ asset('css/new-assets/about_us/banner_about.webp') }}
                                                    alt="Background banner"></div>
                                            <div class="tp-hero-title-box text-center">
                                                <h1 class="tp-hero-title pt-50" style="color:#0A3D62"> About Us </h1>
                                            </div>
                                        </div>
                                        <div class="tp-hero-content">
                                            <p></p>
                                        </div>
                                        <div class="text-center mb-50"><button
                                                class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free
                                                Quote</button></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 🔹 Hero Section -->
                        <section class="section-box">
                            <div class="bg-gray-100">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tp-blog-standard-thumb-box p-relative">
                                                <img src="{{ asset('css/new-assets/about_us/banner_about.webp') }}"
                                                    alt="About Hero Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 🔹 About Section -->
                        <div class="ab-about-area pb-0" style="margin-top: -150px;">
                            <div class="container container-1480">
                                <div class="row align-items-center mb-100">

                                    {{-- LEFT: TEXT --}}
                                    <div class="col-xl-6 col-lg-6">
                                        <div id="about-info">
                                            <div class="ab-about-content p-relative">
                                                <span>Hi!</span>
                                                <p
                                                    style="font-family: Arial, sans-serif; font-size: 16px; line-height: 1.8;">
                                                    We are a creative digital marketing agency that specializes in
                                                    providing high-quality design and branding solutions to businesses
                                                    and individuals. Our team is composed of talented designers,
                                                    developers, SEO specialist teams, Google Ads &amp; social media
                                                    experts, content writers, and marketers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- RIGHT: IMAGE --}}
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="ab-about-right-thumb">
                                            <img src="{{ asset('css/new-assets/about_us/image_about.webp') }}"
                                                alt="About Us" style="width:100%; border-radius: 8px;">
                                        </div>
                                    </div>

                                </div>

                                {{-- SERVICES SECTION (UPDATED TO THREE LISTS) --}}
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-4 mb-40">
                                                <div class="ab-about-category-title-box p-relative">
                                                    <h4 class="ab-about-category-title">
                                                        Something <br><span>WHAT I DO</span>
                                                    </h4>
                                                    <img class="ab-about-shape-1 d-none d-md-block"
                                                        src="{{ asset('css/new-assets/img/home-01/hero/shape-1.png')}}"
                                                        alt="arrow">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 mb-50">
                                                        <div class="ab-about-category-list category-space-1">
                                                            <ul
                                                                style="font-size: 16px; line-height: 1.8; padding-left: 20px;">
                                                                <li>Website Development</li>
                                                                <li>Mobile App Development</li>
                                                                <li>CRM Development</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 mb-50">
                                                        <div class="ab-about-category-list category-space-2">
                                                            <ul
                                                                style="font-size: 16px; line-height: 1.8; padding-left: 20px;">
                                                                <li>SEO Services</li>
                                                                <li>ASO Services</li>
                                                                <li>Digital Marketing</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 mb-50">
                                                        <div class="ab-about-category-list category-space-3">
                                                            <ul
                                                                style="font-size: 16px; line-height: 1.8; padding-left: 20px;">
                                                                <li>Social Media Marketing</li>
                                                                <li>Video-Graphy</li>
                                                                <li>Graphic Designing</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Team Members Section (UNCHANGED) --}}
                                <div class="tp-team-area pt-10 pb-50 fix">
                                    <div class="row justify-content-center mb-40">
                                        <div class="col-md-8 text-center">
                                            <h2 class="sv-service-title" style="color: #0A3D62;">Our Team</h2>
                                            <p class="text-dark-50 mt-2">
                                                @if($teamMembers->count() > 0)
                                                    Meet With Our Team
                                                @else
                                                    Coming Soon !
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            @foreach($teamMembers as $member)
                                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                                    <div class="team-card">
                                                        <div class="team-img">
                                                            <img src="{{ asset('storage/' . $member->image) }}"
                                                                alt="{{ $member->name }}">
                                                        </div>
                                                        <div class="team-info">
                                                            <h4>{{ $member->name }}</h4>
                                                            <p>{{ $member->speciality }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="ab-funfact-area pb-0">
                                    <div class="container container-1480">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="ab-funfact-title-box"><span class="ab-inner-subtitle mb-25"> Our
                                                        Facts </span>
                                                    <h4 class="ab-inner-funfact-title tp_title_anim">Agency <br> Snapshots
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="ab-funfact-wrap">
                                                    <div class="row gx-75">
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="ab-funfact-item mb-90"><span><i
                                                                        class="purecounters">50</i>+</span>
                                                                <p>PROJECTS COMPLETED</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="ab-funfact-item mb-90"><span><i
                                                                        class="purecounters">5</i>+</span>
                                                                <p>YEARS OF EXPERIENCE</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="ab-funfact-item mb-90"><span><i
                                                                        class="purecounters">21</i>+</span>
                                                                <p>TEAM MEMBERS</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="ab-funfact-item mb-90"><span><i
                                                                        class="purecounters">100</i>%</span>
                                                                <p>GROWING AGENCY</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
@endsection