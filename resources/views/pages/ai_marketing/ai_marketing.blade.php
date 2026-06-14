@extends('layouts.homelayout')

@section('title', 'AI Marketing Agency in Dubai | Smart Design & Visual Marketing')
@section('meta_description', 'WB Digitech is a Dubai based AI marketing company that provides intelligent design, photography and video services along with AI powered marketing solutions for brands.')

@section('content')
<style>
    /* Shared Page Custom Styles */
    .wb-page-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/ai_imgs/AidigitalMarketing-01.webp') }}');
        background-size: cover;
        background-position: center;
        padding: 180px 0 150px;
        color: #fff;
    }
    
    .wb-main-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .wb-form-wrapper {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        height: 100%;
        margin-top: 0;
        position: relative;
        z-index: 10;
    }

    .wb-form-wrapper h2.wb-form-title {
        color: #0A3D62;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .wb-custom-input {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 15px;
        color: #4a5568;
        width: 100%;
        display: block;
        min-height: 50px;
    }
    
    .wb-custom-input:focus {
        background: #fff;
        border-color: #0A3D62;
        box-shadow: 0 0 0 0.2rem rgba(10, 61, 98, 0.1);
        outline: none;
    }
    
    .wb-info-box {
        background: #0A3D62;
        border-radius: 15px;
        padding: 40px;
        color: #fff;
        margin-top: 0;
        position: relative;
        z-index: 10;
        height: 100%;
    }
    
    .wb-info-box h4 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 30px;
        font-size: 24px;
    }
    
    /* Services Grid Pattern */
    .services-grid-modern {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 0; /* Removed negative overlap */
        position: relative;
        z-index: 10;
        margin-bottom: 60px;
    }
    
    .service-card-modern {
        background: #fff;
        border-radius: 15px;
        padding: 40px 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .service-card-modern:hover {
        transform: translateY(-5px);
    }
    
    .service-card-modern svg {
        width: 50px;
        height: 50px;
        fill: #00B4D8;
        margin-bottom: 20px;
    }
    
    .service-card-modern h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .service-card-modern h4 a {
        color: #0A3D62;
        text-decoration: none;
    }
    
    .service-card-modern p {
        color: #718096;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-page-hero text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Intelligent Solutions</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                AI Marketing Services
                            </h1>
                            <p class="mb-5" style="color: #e2e8f0; font-size: 18px; max-width: 600px; line-height: 1.6;">
                                Leverage advanced AI tools to optimize your social media, web development, SEO, and digital marketing strategies for superior ROI.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content Area -->
            <section class="wb-main-section">
                <div class="container">
                    
                    <!-- Services Grid -->
                    <div class="services-grid-modern">
                        <!-- AI Social Media Marketing -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18 2h-3.5l-1 2H6c-1.1 0-2 .9-2 2v4h4v2H4v6h6v-6H6v-2h4v-4h4.5l1-2H18v2z" />
                            </svg>
                            <h4><a href="{{ route('ai_social_media') }}">AI Social Media</a></h4>
                            <p>Leverage AI in the planning, management, and optimization of social media campaigns. We use AI solutions to analyze content performance and identify your perfect audience.</p>
                        </div>

                        <!-- AI Website -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21 4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6v2H7v2h10v-2h-2v-2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM3 6h18v12H3V6z" />
                            </svg>
                            <h4><a href="{{ route('ai_website') }}">AI Website Design</a></h4>
                            <p>We design AI-powered websites that are smart, responsive and focus on conversion. We integrate advanced AI marketing platforms that adapt to user behavior and enhance experience.</p>
                        </div>

                        <!-- AI Digital Marketing -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3 17v-2h6v2H3zm0-4v-2h12v2H3zm0-4V7h18v2H3zm0-4V3h18v2H3z" />
                            </svg>
                            <h4><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></h4>
                            <p>Our AI digital marketing is designed to improve your campaigns in email, PPC, and content. We use smart automation and predictive analysis to increase your ROI.</p>
                        </div>

                        <!-- AI Powered SEO -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C8.01 14 6 11.99 6 9.5S8.01 5 10.5 5 15 7.01 15 9.5 12.99 14 10.5 14z" />
                            </svg>
                            <h4><a href="{{ route('ai_seo') }}">AI-Powered SEO</a></h4>
                            <p>Boost your reach with AI-developed SEO methods for better content and site structure. Our AI strategy improves rankings and organic traffic for long-term positioning.</p>
                        </div>

                        <!-- AI Google Ads -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M14 3v18l6-9-6-9zM3 10v4h2l3 3V7l-3 3H3z" />
                            </svg>
                            <h4><a href="{{ route('ai_google_ads') }}">AI Google Ads</a></h4>
                            <p>Optimize your ad spend in our AI-powered Google Ads campaigns. We use AI-based tools to improve targeting, bidding strategies, and ad creatives for measurable ROI.</p>
                        </div>

                        <!-- AI Web App Development -->
                        <div class="service-card-modern">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16 3h-8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16h-8V5h8v14zm-1-9h-6v2h6v-2zm0 4h-6v2h6v-2z" />
                            </svg>
                            <h4><a href="{{ route('ai_web_app') }}">AI Web App Dev</a></h4>
                            <p>We develop scalable intelligent web apps powered by AI. We focus on improving business processes, enhancing user interaction, and supporting long-term growth.</p>
                        </div>
                    </div>
                    
                    <!-- Contact Section -->
                    <div class="row g-5">
                        
                        <!-- Left: Form -->
                        <div class="col-lg-8">
                            <div class="wb-form-wrapper">
                                <span class="mb-2" style="color: #CC7A00; font-weight: 600; font-size: 13px; letter-spacing: 1px; display: block; text-transform: uppercase;">Get in Touch</span>
                                <h2 class="wb-form-title">Have a project in mind?</h2>
                                <p class="text-muted mb-4">Work with a results-based AI marketing agency and turn innovation into impact. Let’s expand your business together.</p>

                                @if(session('success'))
                                    <div class="alert alert-success mb-4" style="background: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 8px;">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('contact.send') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Name -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">FULL NAME</label>
                                            <input type="text" name="name" class="wb-custom-input" placeholder="John Doe" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">EMAIL</label>
                                            <input type="email" name="email" class="wb-custom-input" placeholder="john@example.com" required>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">PHONE</label>
                                            <div style="width: 100%;">
                                                <input type="tel" name="phone" class="wb-custom-input phone-input-flag" placeholder="Phone number" required style="width: 100%;">
                                            </div>
                                        </div>

                                        <!-- Service -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">SERVICE</label>
                                            <select name="service" class="wb-custom-input" required>
                                                <option value="">Select a service</option>
                                                <option>AI Marketing Solutions</option>
                                                <option>Web Design & Development</option>
                                                <option>Google Ads Management</option>
                                                <option>SEO / ASO</option>
                                                <option>Mobile App Development</option>
                                            </select>
                                        </div>

                                        <!-- Message -->
                                        <div class="col-12 mt-3">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">MESSAGE</label>
                                            <textarea name="message" class="wb-custom-input" rows="4" placeholder="How can we help you?" required></textarea>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn w-100 text-white fw-bold py-3" style="background: #0A3D62; border-radius: 8px; border: none; font-size: 16px; cursor: pointer;">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: text-bottom;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                                SEND MESSAGE
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right: Info Box -->
                        <div class="col-lg-4">
                            <div class="wb-info-box">
                                <h4>Contact Information</h4>
                                
                                <div style="display: flex; margin-bottom: 25px;">
                                    <div style="color: #00B4D8; margin-right: 15px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <div>
                                        <h6 style="color: #fff; font-size: 16px; margin-bottom: 5px;">Office Address</h6>
                                        <p style="color: #cbd5e0; font-size: 14px; margin-bottom: 0;">203 Raffa Building, Rolla Street, Bur Dubai, UAE</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex; margin-bottom: 25px;">
                                    <div style="color: #00B4D8; margin-right: 15px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                    <div>
                                        <h6 style="color: #fff; font-size: 16px; margin-bottom: 5px;">Call Us</h6>
                                        <p style="color: #cbd5e0; font-size: 14px; margin-bottom: 0;">+971 4 255 9928<br>+971 50 239 0775</p>
                                    </div>
                                </div>
                                
                                <div style="display: flex;">
                                    <div style="color: #00B4D8; margin-right: 15px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    </div>
                                    <div>
                                        <h6 style="color: #fff; font-size: 16px; margin-bottom: 5px;">Email</h6>
                                        <p style="color: #cbd5e0; font-size: 14px; margin-bottom: 0;">info@wbdigitech.ae<br>hr@wbdigitech.ae</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        </main>
    </div>
</div>
@endsection