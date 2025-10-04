@extends('layouts.homelayout')

@section('title', 'Digital Campaigns - WB-DIGITECH')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="main-wrapper">

    <!-- Spacer below header -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text">
            Digital Campaigns
        </h2>
    </div>
    <div class="tp-hero-content text-center">
        <p class="delay-load">
            GET RESULTS WITH TARGETED DIGITAL MARKETING CAMPAIGNS
        </p>
        <div class="hero-btns mt-4">
            <a href="{{ route('contact') }}" class="btn btn-gradient">Get a Free Quote</a>
        </div>
    </div>

    <!-- Content & Sidebar -->
    <div class="container-flex">

        <!-- Sidebar -->
        <div class="sidebar-col">
            <div class="sidebar">
                <h6>Our Services</h6>
                <ul>
                    <li><a href="{{ route('services.web') }}">Website Design & Development</a></li>
                    <li><a href="{{ route('services.mobile') }}">Mobile App Development</a></li>
                    <li><a href="{{ route('services.smm') }}">Social Media Marketing</a></li>
                    <li class="current-menu-item"><a href="{{ url('service/digital-campaigns') }}">Digital Campaigns</a></li>
                    <li><a href="{{ route('services.seo') }}">SEO</a></li>
                    <li><a href="{{ url('service/graphic-designing-service-in-dubai') }}">Graphic Designing</a></li>
                </ul>

                <!-- Sidebar Images -->
                <div class="sidebar-images">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/campaign-ads.png" alt="Campaign Ads">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/social-targeting.png" alt="Targeting">
                    <img src="https://wbdigitech.ae/wp-content/uploads/2022/09/digital-growth.png" alt="Digital Growth">
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

            <h2>All-in-One Paid Channel Campaigns in Dubai</h2>
            <p>
                By merging captivating creative components with strategic targeting and data-driven optimization, 
                WB-DIGITECH is capable of assisting you in connecting with a qualified audience, leading to increased 
                impressions, clicks, conversions, and revenue growth through skillfully Integrated Campaigns. 
                While paid social media ads can be powerful on their own, they become even more effective when 
                seamlessly integrated with other digital marketing channels.
            </p>

            <p>
                Whether you decide to enlist our services for your all-encompassing digital marketing campaign 
                in Dubai or prefer to focus on a single channel, we excel at recognizing cross-platform opportunities. 
                Creating multiple touchpoints across various platforms results in incremental benefits.
            </p>

            <h2>Unlock Success with Digital Marketing Campaigns Dubai</h2>
            <p>
                Crafting customized creative content for every step of the consumer experience is essential 
                for enhancing brand recognition, showcasing industry knowledge, and maintaining a strong presence 
                in the minds of customers. Whether it’s raising brand awareness, promoting products, engaging with 
                the audience, running interactive contests, or remarketing, our creative skills allow us to produce 
                content that grabs attention in a crowded market and effectively communicates your key message.
            </p>

            <h2>Lead Generation Campaigns</h2>
            <p>
                Creating meaningful connections with a specific audience is more effective than reaching out to 
                a broad range of individuals. By tailoring your approach and engaging with potential customers 
                based on their interests and needs, you can establish strong relationships that lead to successful outcomes. 
                Are you prepared to take this targeted approach to the next level?
            </p>

            <img class="service-img" src="https://wbdigitech.ae/wp-content/uploads/2022/09/digital-campaign-banner.png" alt="Digital Campaign Banner">

        </div>
    </div>
</div>
@endsection
