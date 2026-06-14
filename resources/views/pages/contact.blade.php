@extends('layouts.homelayout')

@section('title', 'Contact WB-Digitech — Let’s Build Something Great')

@section('meta_description', 'Have a project in mind? Get in touch with WB-Digitech today for our expert digital strategies, custom solutions, and support to help take your brand to the next level.')

@section('content')
<style>
    /* Contact Page Custom Styles */
    .wb-contact-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/wb_imgs/mobile_app_services.jpg') }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px; /* Increased top and bottom padding */
        color: #fff;
    }
    
    .wb-contact-cards-wrap {
        margin-top: 40px; /* Removed negative overlap */
        position: relative;
        z-index: 10;
    }
    
    .wb-box-card {
        background: #fff;
        border-radius: 12px;
        padding: 30px 20px;
        text-align: left;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        height: 100%;
        transition: transform 0.3s ease;
    }
    
    .wb-box-card:hover {
        transform: translateY(-5px);
    }
    
    .wb-icon-circle {
        width: 50px;
        height: 50px;
        background: rgba(10, 61, 98, 0.05);
        color: #0A3D62;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .wb-box-card h4.wb-card-title {
        color: #0A3D62;
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 0;
    }
    
    .wb-box-card p.wb-card-val {
        color: #2d3748;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 5px;
        margin-top: 0;
    }
    
    .wb-box-card p.wb-card-desc {
        color: #718096;
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 0;
        margin-top: 10px;
    }

    .wb-form-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .wb-form-wrapper {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        height: 100%;
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

    .wb-office-hours {
        background: #0A3D62;
        border-radius: 15px;
        padding: 30px; /* Reduced padding */
        color: #fff;
        /* Removed height: 100% to let it shrink */
    }

    .wb-office-hours h4.wb-oh-title {
        color: #fff;
        font-weight: 700;
        margin-bottom: 20px; /* Reduced margin */
        font-size: 20px; /* Reduced font size slightly */
    }

    .wb-oh-item {
        display: flex;
        margin-bottom: 20px; /* Reduced margin */
    }

    .wb-oh-icon {
        color: #00B4D8;
        font-size: 20px;
        margin-right: 15px;
        margin-top: 2px;
    }

    .wb-oh-text h6.wb-oh-subtitle {
        color: #fff;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 16px;
    }

    .wb-oh-text p.wb-oh-desc {
        color: #cbd5e0;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .wb-side-img {
        border-radius: 15px;
        width: 100%;
        height: 200px; /* Reduced image height to make room */
        object-fit: cover;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .right-col-flex {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-contact-hero text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Contact WB Digitech</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                Let's Talk About Your Digital Marketing Goals
                            </h1>
                            <p class="mb-5" style="color: #e2e8f0; font-size: 18px; max-width: 600px; line-height: 1.6;">
                                Reach out to our team for tailored guidance on web development, SEO, digital marketing, and IT solutions across the UAE.
                            </p>
                            
                            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                                <a href="#contact-form" class="btn text-white fw-bold" style="background: #CC7A00; border-radius: 8px; padding: 15px 25px; text-decoration: none;">
                                    GET FREE QUOTE
                                </a>
                                <a href="https://wa.me/971502390775" class="btn text-white fw-bold" style="background: #25D366; border-radius: 8px; padding: 15px 25px; text-decoration: none;">
                                    WHATSAPP US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Info Cards Row -->
            <section class="wb-contact-cards-wrap">
                <div class="container">
                    <div class="row g-4">
                        <!-- Call Us -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="wb-box-card">
                                <div class="wb-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </div>
                                <h4 class="wb-card-title">Call Us</h4>
                                <p class="wb-card-val">+971 4 255 9928</p>
                                <p class="wb-card-val">+971 50 239 0775</p>
                                <p class="wb-card-desc">Speak with our consultants directly.</p>
                            </div>
                        </div>
                        
                        <!-- WhatsApp -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="wb-box-card">
                                <div class="wb-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <h4 class="wb-card-title">WhatsApp</h4>
                                <p class="wb-card-val">+971 50 239 0775</p>
                                <p class="wb-card-desc">Quick responses for urgent questions.</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="wb-box-card">
                                <div class="wb-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </div>
                                <h4 class="wb-card-title">Email</h4>
                                <p class="wb-card-val">info@wbdigitech.ae</p>
                                <p class="wb-card-val">hr@wbdigitech.ae</p>
                                <p class="wb-card-desc">Share your requirements anytime.</p>
                            </div>
                        </div>

                        <!-- Office -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="wb-box-card">
                                <div class="wb-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <h4 class="wb-card-title">Office</h4>
                                <p class="wb-card-val">203 Raffa Building</p>
                                <p class="wb-card-val">Rolla Street, Bur Dubai, UAE</p>
                                <p class="wb-card-desc">Visit us for in-person consultation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Form & Office Hours Section -->
            <section class="wb-form-section" id="contact-form">
                <div class="container">
                    <div class="row g-5">
                        
                        <!-- Left: Form -->
                        <div class="col-lg-7">
                            <div class="wb-form-wrapper">
                                <span class="mb-2" style="color: #CC7A00; font-weight: 600; font-size: 13px; letter-spacing: 1px; display: block; text-transform: uppercase;">Send A Message</span>
                                <h2 class="wb-form-title">Request a Callback</h2>
                                <p class="text-muted mb-4">Fill out the form and our team will get back to you with the right next steps.</p>
                                
                                @if(session('success'))
                                    <div class="alert alert-success mb-4" style="background: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 8px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('contact.send') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Full Name -->
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
                                                <option>Web Design & Development</option>
                                                <option>Google Ads Management</option>
                                                <option>SEO / ASO</option>
                                                <option>Mobile App Development</option>
                                                <option>Social Media Marketing</option>
                                                <option>Graphic Designing</option>
                                                <option>Videography</option>
                                                <option>CRM</option>
                                            </select>
                                        </div>

                                        <!-- Message -->
                                        <div class="col-12 mt-3">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">MESSAGE</label>
                                            <textarea name="message" class="wb-custom-input" rows="5" placeholder="Tell us a bit about your requirements" required></textarea>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn w-100 text-white fw-bold py-3" style="background: #0A3D62; border-radius: 8px; border: none; font-size: 16px; cursor: pointer;">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: text-bottom;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                                SUBMIT INQUIRY
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right: Image & Office Hours -->
                        <div class="col-lg-5 right-col-flex">
                            <img src="{{ asset('css/new-assets/web_imgs/WebsiteDesign.webp') }}" alt="Contact Team" class="wb-side-img">
                            
                            <div class="wb-office-hours">
                                <h4 class="wb-oh-title">Office Hours</h4>
                                
                                <div class="wb-oh-item">
                                    <div class="wb-oh-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                    </div>
                                    <div class="wb-oh-text">
                                        <h6 class="wb-oh-subtitle">Monday - Friday</h6>
                                        <p class="wb-oh-desc">9:00 AM - 6:00 PM</p>
                                    </div>
                                </div>
                                
                                <div class="wb-oh-item">
                                    <div class="wb-oh-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <div class="wb-oh-text">
                                        <h6 class="wb-oh-subtitle">Main Office</h6>
                                        <p class="wb-oh-desc">203 Raffa Building - Rolla Street - Bur Dubai - United Arab Emirates</p>
                                    </div>
                                </div>
                                
                                <div class="wb-oh-item" style="margin-bottom: 0;">
                                    <div class="wb-oh-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    </div>
                                    <div class="wb-oh-text">
                                        <h6 class="wb-oh-subtitle">Fastest Support Channel</h6>
                                        <p class="wb-oh-desc">WhatsApp for quick consultations and follow-ups.</p>
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