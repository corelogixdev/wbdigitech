@extends('layouts.homelayout')

@section('title', 'AI Website Services | Smart AI Web Services & AI Web Development')
@section('meta_description', 'WB Digitech provides cutting edge AI Website Services and AI web services to design smart, responsive and conversion oriented AI websites for today’s businesses.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/ai_imgs/AIwebsite-01.webp" 
            title="AI Website Services for Intelligent Digital Experiences"
            description="Our AI Website services for Business which we at WB Digitech implement to put together brilliant, adaptive and high performance digital platforms. We blend design innovation with automation to bring to you next generation AI web services which in turn improve user experience, engagement and conversions."
            serviceCategory="AI Marketing"
            serviceName="AI Marketing"
        >
        </x-service-hero>


        <!-- Content & Sidebar -->
        <div class="container-flex">

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div class="sidebar">
                    <h6>Our Services</h6>
                    <ul>
                        <li><a href="{{ route('ai_marketing') }}">AI Marketing Overview</a></li>
                        <li><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></li>
                        <li><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a>
                        </li>
                        <li class="current-menu-item"><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                        <li><a href="{{ route('ai_seo') }}">AI-Powered SEO</a></li>
                        <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                        <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="Smart AI Web Services Built for Performance">
<p>Our AI in web services we focus on automation, personalization, and data driven design. We provide
                    intelligent layouts which adapt and behavior based content to our AI website services that respond
                    dynamically to your users.</p>
<p>Our solutions unlike basic templates and free AI website which is what you get from some sites are
                    instead custom built for scale, security and long term growth with the use of advanced AI web
                    development practices.</p>

</x-service-content-card>

<x-service-content-card title="What Makes Our AI Websites Different">
<p><strong>AI-Powered Website Design</strong><br>
                    We have created each of our artificial intelligence websites with adaptive UI, smart content flow, and
                    automated personalization. Our AI Website Services which put our clients' brands above the best AI
                    websites in competitive markets.</p>
<p><strong>AI-Driven Website Functionality</strong><br>
                    Our AI web services which include chatbots, recommendation engines, smart forms, and analytics. We also
                    present AI sites architecture that improves speed of decision making and better user journeys.</p>
<p><strong>Custom AI Web Development</strong><br>
                    Through our work in advanced AI web development we create intelligent systems which learn from data.
                    Each artificial intelligence site we develop is optimized for performance, SEO, and conversions.</p>

</x-service-content-card>

<x-service-content-card title="Why Choose WB Digitech for AI Website Services">
<p>Expert-led AI Website Services</p>
<p>Scalable and secure AI web services</p>
<p>Conversion-focused AI website design</p>
<p>Custom automations (not free generic AI sites).</p>
<p>Seamless integration with marketing platforms</p>
<p>Also we put our AI sites on the same page as our AI social media marketing which in turn fuels digital
                    growth.</p>

</x-service-content-card>

<x-service-content-card title="AI Websites That Grow With Your Business">
<p>Many companies use free AI services which is an issue of lack in terms of flexibility and ownership. We
                    at AI Website Services provide you full control, advanced customization options, and we are your go to
                    for long term scalable solutions which also breaks the platform tie in.</p>
<p>Using smart AI site, we make sure your website grows with user behavior and trends.</p>

</x-service-content-card>

<x-service-content-card title="Future-Ready Artificial Intelligence Websites">
<p>A present day artificial intelligence site must be ever adaptive, analyze and improve at all times. We
                    have designed our AI web services for automation, prediction, and personalization which in turn makes
                    your website a growth engine rather than just an online presence.</p>
<p>Our AI sites which are supported by a team of seasoned digital marketing experts are designed for
                    visibility, engagement, and ROI.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What do AI Website Services do?', 'answer' => '<p>AI in website design and development which includes the use of automation, analytics, and AI to enhance
                    performance and user experience.</p>'],
    ['question' => 'What is it that sets paid AI sites apart from free ones?', 'answer' => '<p>Unlike free AI platforms which are a choice for many, we see custom AI services as the solution that
                    scales, that you own, that allows for in depth personalization and which also improves your SEO
                    performance.</p>'],
    ['question' => 'What is present in an artificial intelligence website?', 'answer' => '<p>Artificial intelligence sites may present chatbots, smart content delivery, behavior tracking, and
                    automation.</p>'],
    ['question' => 'Can AI platforms connect with marketing tools?', 'answer' => '<p>Yes we have integrated our AI Website Services with analytics, CRM and social media marketing platforms.
                </p>'],
    ['question' => 'Are small businesses well suited for AI?', 'answer' => '<p>Sure. A smart AI platform which is used by small businesses to outdo large brands via automation and
                    design.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


<x-service-content-card title="Build a Smarter Website with AI">
<p>Transform your digital footprint with innovative AI Website services which are built for performance,
                    automation and growth. At WB Digitech we present smart AI web services that help businesses thrive in
                    the digital age.</p>
<p>Let us create a website that uses AI.</p>

</x-service-content-card>

</div>
        </div>
    </div>
@endsection