@extends('layouts.homelayout')

@section('title', 'Social Media Marketing - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text">
            Instagram Advertising
        </h2>
    </div>
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            Expand your reach, engage your audience, and grow your business with WB DIGITECH’s powerful social media strategies.
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact') }}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

        <!-- Hero Image Section -->
    <div class="hero-image-section">
        <div class="hero-image-container">
            <img src="{{ asset('css/new-assets/new_images/WEBimagesWBSocialmedia-01.webp') }}" alt="social-media-marketing" class="hero-image">
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
                    <li><a href="{{ route('services.smm') }}">Social Media Marketing</a></li>
                    <li><a href="{{ route('services.facebook_advertising') }}">Facebook Advertising</a></li>
                    <li><a href="{{ route('services.linkedin_advertising') }}">LinkedIn Advertising</a></li>
                    <li><a href="{{ route('services.pinterest_advertising') }}">Pinterest Advertising</a></li>
                    <li class="current-menu-item"><a href="{{ route('services.instagram_advertising') }}">Instagram Advertising</a></li>
                    <li><a href="{{ route('services.twitter_advertising') }}">Twitter Advertising</a></li>
                    <li><a href="{{ route('services.youtube_ads') }}">YouTube Ads</a></li>
                    <li><a href="{{ route('services.tiktok_ads') }}">TikTok Ads</a></li>
                    <li><a href="{{ route('services.snap_chat_ads') }}">Snapchat Ads</a></li>
                    <li><a href="{{ route('services.whatsapp_marketing') }}">WhatsApp Marketing</a></li>
                </ul>


                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    {{-- <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/social-media.png" alt="Social Media Strategy">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/social-marketing.png" alt="Social Media Ads">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/social-engagement.png" alt="Engagement"> --}}
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>Social Media Channels Covered</h2>
            <p>We create and manage your brand presence across all major platforms including Facebook, Instagram, LinkedIn, Twitter, and more.</p>
            {{-- <img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/SM-icon-banner-01.png" alt="Social Media Channels"> --}}

            <h2>Creative Strategy</h2>
            <p>We develop innovative and sophisticated social media tactics to establish your brand, increase visibility, and attract customers. Our team conducts a thorough analysis of your industry to identify the most effective approach, tone, content, and target demographic.</p>

            <h2>Campaign Management</h2>
            <p>The initial attention-grabbing viral campaign is crucial. Our team creates valuable content for both you and your customers. We handle data collection and analysis, saving you time and effort. We understand what strategies are effective, which ones are not, who your target audience is, and most importantly, how to ensure a return on your investment.</p>

            <h2>Community Management</h2>
            <p>Effective brand management relies heavily on social listening, as it provides valuable insights into your industry and customer base. Our community management services are designed to not only resolve problems, but also to convert customer complaints into brand advocates.</p>

            <h2>Paid Media</h2>
            <p>We conduct thorough research on your target audience and develop precise advertisements for various social media platforms. We conduct in-depth analysis, A/B testing, and monitor return on investment to deliver measurable results for your business.</p>

            {{-- <img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/social-marketing.png" alt="Social Media Marketing Service Image"> --}}

        </div>
    </div>
</div>
@endsection
