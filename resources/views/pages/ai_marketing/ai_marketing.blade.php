@extends('layouts.homelayout')

@section('title', 'AI Marketing Agency in Dubai | Smart Design & Visual Marketing')
@section('meta_description', 'WB Digitech is a Dubai based AI marketing company that provides intelligent design, photography and video services along with AI powered marketing solutions for brands.')


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
                AI Marketing Services
            </h2>
        </div>

        <!-- Services Box -->
        <div class="box-gray-100">
            <div class="services-grid">

                <!-- AI Social Media Marketing -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M18 2h-3.5l-1 2H6c-1.1 0-2 .9-2 2v4h4v2H4v6h6v-6H6v-2h4v-4h4.5l1-2H18v2z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_social_media') }}" style="color:#001f4d; text-decoration:none;">AI Social
                                Media Marketing</a></h4>
                        <p>Leverage AI in the planning, management, and optimization of social media campaigns that we do
                            best. We use AI marketing solutions which looks into the behavior, content performance, which in
                            turn will identify and present to you that perfect audience as well as increase total engagement
                            through all channels.</p>
                    </div>
                </div>

                <!-- AI Website -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21 4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h6v2H7v2h10v-2h-2v-2h6c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM3 6h18v12H3V6z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_website') }}" style="color:#001f4d; text-decoration:none;">AI Website
                                Design & Development</a>
                        </h4>
                        <p>We have designed and put together AI powered websites that are smart, responsive and focus on
                            conversion. We use advanced AI marketing platforms which we integrate into our websites that
                            which adapt to the user’s behavior, improve navigation and in turn enhance the overall
                            experience.</p>
                    </div>
                </div>

                <!-- AI Digital Marketing -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M3 17v-2h6v2H3zm0-4v-2h12v2H3zm0-4V7h18v2H3zm0-4V3h18v2H3z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_digital_marketing') }}" style="color:#001f4d; text-decoration:none;">AI
                                Digital Marketing</a></h4>
                        <p>Our AI digital marketing which we have designed to improve your campaigns in email, PPC, content
                            marketing, and analytics. We use smart automation and predictive analysis to make it so that our
                            clients’ ROI see an increase via performance based strategies.</p>
                    </div>
                </div>

                <!-- AI Powered SEO -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C8.01 14 6 11.99 6 9.5S8.01 5 10.5 5 15 7.01 15 9.5 12.99 14 10.5 14z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_seo') }}" style="color:#001f4d; text-decoration:none;">AI-Powered SEO</a>
                        </h4>
                        <p>Boost with our AI which has developed SEO methods for better content, keyword and site structure.
                            We have put in place an AI marketing strategy which improves rankings, increases organic traffic
                            and which also better positions you for the long term.</p>
                    </div>
                </div>

                <!-- AI Google Ads -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M14 3v18l6-9-6-9zM3 10v4h2l3 3V7l-3 3H3z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_google_ads') }}" style="color:#001f4d; text-decoration:none;">AI Google
                                Ads Management</a></h4>
                        <p>Optimize your ad spend in our AI powered Google Ads campaigns. We use AI based marketing tools
                            which improve targeting, bidding strategies, and ad creatives for better performance and
                            measurable ROI.</p>
                    </div>
                </div>

                <!-- AI Web App Development -->
                <div class="service-item">
                    <svg fill="#001f4d" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16 3h-8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16h-8V5h8v14zm-1-9h-6v2h6v-2zm0 4h-6v2h6v-2z" />
                    </svg>
                    <div>
                        <h4><a href="{{ route('ai_web_app') }}" style="color:#001f4d; text-decoration:none;">AI Web App
                                Development</a></h4>
                        <p>We develop scalable intelligent web apps powered by AI. We focus on improving business processes,
                            enhancing user interaction, and we support your long term growth with smart automation and
                            analytics.</p>
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
                            <span class="text-uppercase">Get in Touch</span>
                            <h2 class="text-heading-3 mt-10">Have a project in mind?</h2>
                            <p class="text-body-text mt-20">At the right time do what it takes to save your investment and
                                see growth. Work with a results based AI marketing agency and turn innovation into impact.
                                Let’s expand your business together.</p>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-lg-4 mb-40">
                            <h4 class="text-heading-6 mb-10">WB Digitech – Dubai, UAE</h4>
                            <p class="text-body-text">
                                Office Address<br>
                                504 Raffa Building, Rolla Street, Bur Dubai, UAE
                            </p>

                            <p class="text-body-text">
                                Call Us<br>
                                <a href="tel:+97142559928">+971-4-255-9928</a><br>
                                <a href="tel:+971502390775">+971-50-239-0775</a>
                            </p>

                            <p class="text-body-text">
                                Email<br>
                                <a href="mailto:info@wbdigitech.ae">info@wbdigitech.ae</a><br>
                                <a href="mailto:hr@wbdigitech.ae">hr@wbdigitech.ae</a>
                            </p>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-8">
                            <form method="POST" action="{{ route('contact.send') }}" class="contact-form">
                                @csrf

                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                            required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-6 mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                            required>
                                    </div>

                                    <!-- Phone with Country Code -->
                                    <div class="col-lg-3 mb-3">
                                        <select name="country_code" class="form-control" required>
                                            <option value="+971">🇦🇪 +971</option>
                                            <option value="+92">🇵🇰 +92</option>
                                            <option value="+91">🇮🇳 +91</option>
                                            <option value="+1">🇺🇸 +1</option>
                                            <option value="+44">🇬🇧 +44</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-3 mb-3">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone number"
                                            required>
                                    </div>

                                    <!-- Service / Subject Dropdown -->
                                    <div class="col-lg-6 mb-3">
                                        <select name="service" class="form-control" required>
                                            <option value="">Select a Service</option>
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
                                    <div class="col-lg-12 mb-3">
                                        <textarea name="message" class="form-control" rows="4"
                                            placeholder="How can we help you?" required></textarea>
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-lg-12 mt-15 text-center">
                                        <button type="submit" class="btn"
                                            style="color: #fff; background: linear-gradient(90deg, #0A3D62 0%, #0077B6 100%);">
                                            Send Message
                                        </button>
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