@extends('layouts.homelayout')

@section('title', 'AI Powered SEO - AI Marketing Agency')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/ai_service.css') }}">

<div class="main-wrapper">

    <!-- Spacer -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text" style="color: #001f4d;">
            AI Powered SEO
        </h2>
    </div>

    <!-- Service Details Box -->
    <div class="box-gray-100">
        <div class="services-grid">

            <!-- Overview -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C8.01 14 6 11.99 6 9.5S8.01 5 10.5 5 15 7.01 15 9.5 12.99 14 10.5 14z"/>
                </svg>
                <div>
                    <h4 style="color:#001f4d; text-decoration:none;">Overview</h4>
                    <p>Boost search engine rankings with AI algorithms that optimize content, keywords, and website structure for maximum visibility.</p>
                </div>
            </div>

            <!-- Key Features -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18 2h-3.5l-1 2H6c-1.1 0-2 .9-2 2v4h4v2H4v6h6v-6H6v-2h4v-4h4.5l1-2H18v2z"/>
                </svg>
                <div>
                    <h4 style="color:#001f4d; text-decoration:none;">Features</h4>
                    <ul style="padding-left:20px; margin:0; color:#001f4d;">
                        <li>AI Keyword Research</li>
                        <li>On-page Optimization</li>
                        <li>Content Enhancement</li>
                        <li>Link Building Suggestions</li>
                        <li>SEO Analytics & Reporting</li>
                    </ul>
                </div>
            </div>

            <!-- Benefits -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21 4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6v2H7v2h10v-2h-2v-2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM3 6h18v12H3V6z"/>
                </svg>
                <div>
                    <h4 style="color:#001f4d; text-decoration:none;">Benefits</h4>
                    <p style="color:#001f4d;">Increase website traffic, improve organic search visibility, outrank competitors, and achieve better ROI on marketing campaigns using AI-powered SEO insights.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Get in Touch Section -->
    <section class="section-box">
        <div class="container mb-20">
            <div class="bdrd-58 box-gray-100 icon-wave">
                <div class="row">
                    <div class="col-lg-12 mb-60 text-center">
                        <span class="text-uppercase text-white">Get in Touch</span>
                        <h2 class="text-heading-3 mt-10">Have a project in mind?</h2>
                        <p class="text-body-text mt-20">The right move at the right time saves your investment. Let’s expand your business together.</p>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-4 mb-40">
                        <h4 class="text-heading-6 mb-10" style="color: #001f4d">WB-DigiTech</h4>
                        <p class="text-body-text">
                            504 Raffa Building Rolla Street Bur Dubai, UAE
                        </p>

                        <p class="text-body-text">
                            <a href="tel:+97142559928">+971-4-255-9928</a><br>
                            <a href="tel:+971502390775">+971-50-239-0775</a>
                        </p>

                        <p class="text-body-text">
                            <a href="mailto:info@wbdigitech.ae">info@wbdigitech.ae</a><br>
                            <a href="mailto:hr@wbdigitech.ae">hr@wbdigitech.ae</a>
                        </p>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <form method="POST" action="{{ route('contact.send') }}" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <textarea name="message" class="form-control" rows="4" placeholder="How we can help you?" required></textarea>
                                </div>
                                <div class="col-lg-12 mt-15 text-center">
                                    <button type="submit" class="btn btn-black">Send Message</button>
                                    <br><span class="text-body-text-md mt-2 d-block" style="color:#001f4d">LET’S CREATE SOMETHING IMPRESSIVE</span>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
@endsection
