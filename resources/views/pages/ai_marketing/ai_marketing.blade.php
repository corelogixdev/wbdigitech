@extends('layouts.homelayout')

@section('title', 'Services - AI Marketing Agency')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<style>
/* Boxes */
.box-gray-100 {
    background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%);
    border-radius: 12px;
    padding: 40px 25px;
    margin-bottom: 40px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Two-column layout */
.services-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}
.service-item {
    flex: 1 1 45%;
    display: flex;
    background-color: #f0f4ff;
    border-radius: 12px;
    padding: 20px;
    align-items: flex-start;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}
.service-item:hover {
    transform: translateY(-5px);
}
.service-item svg {
    width: 40px;
    height: 40px;
    margin-right: 20px;
    flex-shrink: 0;
}
.service-item h4 {
    margin: 0 0 10px;
    font-size: 1.4rem;
    color: #001f4d;
}
.service-item p {
    margin: 0;
    color: #001f4d;
}

/* Contact Section (WB-DIGITECH style) */
.section-box {
    background-color: #f8f9fa;
    padding: 60px 20px;
    border-radius: 12px;
    margin-top: 50px;
}
.section-box .text-heading-3 {
    color: #001f4d;
}
.section-box .text-body-text {
    color: #fffdfd;
}
.section-box .contact-form input,
.section-box .contact-form textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
}
.section-box .btn-black {
    background-color: #001f4d;
    color: #fff;
    font-weight: bold;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}
.section-box .btn-black:hover {
    background-color: #003366;
}
</style>

<div class="main-wrapper">

    <!-- Spacer -->
    <div style="padding: 80px"></div>

    <!-- Hero Section -->
    <div class="tp-hero-title-wrap mb-35 text-center">
        <h2 class="tp-hero-title gradient-text" style="color: #001f4d;">
            AI Marketing Agency
        </h2>
    </div>

    <!-- Services Box -->
    <div class="box-gray-100">
        <div class="services-grid">
            <!-- Website -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21 4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6v2H7v2h10v-2h-2v-2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM3 6h18v12H3V6z"/>
                </svg>
                <div>
                    <h4>Website</h4>
                    <p>Social media has become an integral part of everyday life. Platforms like Facebook, Instagram, Twitter, LinkedIn, and TikTok are not only social networks, but powerful channels for business.</p>
                </div>
            </div>

            <!-- Social Media Marketing -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7a3.32 3.32 0 0 0 0-1.4l7.02-4.11a2.99 2.99 0 1 0-.91-1.5L8 9.79a3 3 0 1 0 0 4.42l7.13 4.18c.5-.46 1.17-.75 1.92-.75a3 3 0 1 0 0-6z"/>
                </svg>
                <div>
                    <h4>Social Media Marketing</h4>
                    <p>Platforms like Facebook, Instagram, Twitter, LinkedIn, and TikTok help businesses engage their audience, drive traffic, and increase conversions.</p>
                </div>
            </div>

            <!-- Google Ads -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M3 10v4h2l3 3V7l-3 3H3zm14.5-1c.83 0 1.5.67 1.5 1.5S18.33 12 17.5 12 16 11.33 16 10.5 16.67 9 17.5 9zM14 3v18l6-9-6-9z"/>
                </svg>
                <div>
                    <h4>Google Ads</h4>
                    <p>We specialize in optimizing Google Ads campaigns using advanced AI tools to ensure maximum ROI and lead generation for your business.</p>
                </div>
            </div>

            <!-- AI-Powered SEO -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C8.01 14 6 11.99 6 9.5S8.01 5 10.5 5 15 7.01 15 9.5 12.99 14 10.5 14z"/>
                </svg>
                <div>
                    <h4>AI-Powered SEO</h4>
                    <p>Our AI-powered SEO strategies help you dominate search results, attract targeted traffic, and improve online visibility in competitive markets.</p>
                </div>
            </div>

            <!-- AI-Powered Web App Development -->
            <div class="service-item">
                <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M16 3h-8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16h-8V5h8v14zm-1-9h-6v2h6v-2zm0 4h-6v2h6v-2z"/>
                </svg>
                <div>
                    <h4>AI-Powered Web App Development</h4>
                    <p>We specialize in designing and developing AI-powered web applications that are scalable, intelligent, and enhance user experience.</p>
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
