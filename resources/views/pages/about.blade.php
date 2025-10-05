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
                                            <div class="tp-hero-shape-1 d-none"><img src={{ asset('css/new-assets/img/home-01/hero/hero-bg-shape-1-1.svg') }} alt="Background banner"></div>
                                            <div class="tp-hero-title-box text-center">
                                                <h1 class="tp-hero-title pt-50"> About Us </h1>
                                            </div>
                                        </div>
                                        <div class="tp-hero-content">
                                            <p></p>
                                        </div>
                                        <div class="text-center mb-100"><button class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free Quote</button></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="raw-html-embed">
                            <div class="ab-inner-hero-area ab-inner-hero-bg p-relative about-us-banner">
                                <div class="breadcurmb-site d-none">
                                    <h6>About Us</h6>
                                </div>
                                <div class="ab-inner-hero-scroll smooth"><a href="#about-info"><span> Scroll to explore </span></a></div>
                                <div class="container container-1480">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="ab-inner-hero-title-box"><span class="ab-inner-hero-subtitle">Digital <br> creative agency</span>
                                                <h2 class="ab-inner-hero-title tp-char-animation">Building Digital Presence</h2>
                                                <p>Digital experiences with maximum emotional impact</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-xl-5 col-lg-8">
                                            <div class="ab-inner-hero-content">
                                                <p> Develops, designs &amp; delivers websites &amp; creative campaigns that drive results. </p><a class="tp-btn-white-sm border-style d-none" href="#">Our Story</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-about-area ab-about-mt pb-90 z-index-5">
                                <div class="container container-1480">
                                    <div class="ab-about-thumb-wrap mb-180">
                                        <div class="row align-items-end">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="ab-about-left-thumb"><img src="{{ asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg')}}" alt="About"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="ab-about-right-thumb p-relative"><img class="inner-img z-index-5" src="{{ asset('css/new-assets/img/home-01/hero/thumb-one.png')}}" alt="About Us"><img src="{{ asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg')}}"
                                                        alt="About Volga Tigris"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-info" class="row">
                                        <div class="col-xxl-9">
                                            <div class="ab-about-content p-relative"><span> Hi! </span>
                                                <p class="tp-dropcap tp_fade_bottom"> We are a creative digital marketing agency that specializes in providing high-quality design and branding solutions to businesses and individuals. Our team is composed of talented designers, developers,
                                                    SEO specialist teams, Google Ads &amp; social media experts, content writers, &amp; marketers.! </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-xl-4col-lg-5 col-md-4 mb-40">
                                                    <div class="ab-about-category-title-box p-relative">
                                                        <h4 class="ab-about-category-title">Something <br><span>WHAT I DO</span></h4><img class="ab-about-shape-1 d-none d-md-block" src="{{ asset('css/new-assets/img/home-01/hero/shape-1.png')}}" alt="arrow"></div>
                                                </div>
                                                <div class="col-xl-7 col-lg-8 col-md-8">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-5 col-md-6 mb-40">
                                                            <div class="ab-about-category-list category-space-1 tp_fade_bottom">
                                                                <ul>
                                                                    <li>SEO</li>
                                                                    <li>Web Development</li>
                                                                    <li>Google Ads</li>
                                                                    <li>Social Media Marketing</li>
                                                                    <li>Data Entry</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-7 col-md-6 mb-40">
                                                            <div class="ab-about-category-list category-space-2 tp_fade_bottom">
                                                                <ul>
                                                                    <li>Tele Marketing </li>
                                                                    <li>Customer Satisfaction Survey</li>
                                                                    <li>Data Cleansing</li>
                                                                    <li>Call Center </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
           
    {{-- Team Members Section --}}   
            <div class="tp-team-area pt-20 pb-50 fix">
                {{-- Section Title --}}
                    <div class="row justify-content-center mb-40">
                        <div class="col-md-8 text-center">
                            <h2 class="sv-service-title" style="color: #0A3D62;">Our Team</h2>
                            <p class="text-dark-50 mt-2">Meet With Our Team</p>
                        </div>
                    </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        @foreach($teamMembers as $member)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="team-card">
                                <div class="team-img">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
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

                            <div class="ab-funfact-area pb-40">
                                <div class="container container-1480">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="ab-funfact-title-box"><span class="ab-inner-subtitle mb-25"> Our Facts </span>
                                                <h4 class="ab-inner-funfact-title tp_title_anim">Agency <br> Snapshots</h4>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="ab-funfact-wrap">
                                                <div class="row gx-75">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">500</i>+</span>
                                                            <p>PROJECTS COMPLETED</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">7</i>+</span>
                                                            <p>YEARS OF EXPERIENCE</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">21</i>+</span>
                                                            <p>TEAM MEMBERS</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">100</i>%</span>
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