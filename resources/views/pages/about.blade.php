@extends('layouts.homelayout')

@section('title', 'About WB-Digitech | Digital Marketing & Web Solutions in Dubai')
@section('meta_description', 'WB-Digitech is a full-service digital agency based in Dubai, delivering web development, SEO, digital marketing & creative solutions for global brands')

@section('content')

<style>
    /* About Us Hero Section */
    .wb-about-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/about_us/banner_about.webp') }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px;
        color: #fff;
    }
    
    .wb-about-cards-wrap {
        padding-top: 50px;
        position: relative;
        z-index: 10;
        padding-bottom: 80px;
    }

    /* Elevated Card */
    .wb-card-box {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .wb-card-box-hoverable:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    }

    .wb-box-title {
        color: #0A3D62;
        font-weight: 800;
        margin-bottom: 25px;
        font-size: 1.5rem;
    }

    .wb-rich-text {
        color: #4a5568;
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .wb-gradient-text {
        background: linear-gradient(90deg, #0A3D62, #00B4D8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .wb-gradient-bg {
        background: linear-gradient(90deg, #0A3D62, #00B4D8);
        color: #fff;
    }

    /* Team Cards */
    .wb-team-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        text-align: center;
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .wb-team-card:hover {
        transform: translateY(-5px);
    }

    .wb-team-img {
        width: 150px; 
        height: 150px; 
        border-radius: 50%; 
        object-fit: cover; 
        border: 4px solid #f8fafc;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }

    /* Stats Cards */
    .wb-stat-card {
        background: #f8fafc;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .wb-stat-card:hover {
        background: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border-color: #fff;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-about-hero text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 2px; font-size: 14px; display: block;">About WB-Digitech</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                Sign of Experience. Your aspirations, our strategies.
                            </h1>
                            <p style="color: #e2e8f0; font-size: 18px; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                                To help brands to grow, connect, and stand out in the digital world. We do not just create digital assets, we design digital experiences which see results and which also provide long term value.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main About Content (Shifted Up) -->
            <section class="wb-about-cards-wrap">
                <div class="container container-1500">
                    <div class="row g-4 align-items-center">
                        
                        <!-- Left Content -->
                        <div class="col-lg-6">
                            <div class="wb-card-box border-0" style="box-shadow: none; padding: 0;">
                                <div style="display: inline-block; transform: rotate(-10deg); margin-bottom: 20px;">
                                    <span class="badge px-4 py-2 rounded-pill" style="background: #e6f0fa; color: #0077b6; font-size: 14px; font-weight: 700; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">👋 Welcome</span>
                                </div>
                                
                                <div class="wb-rich-text mb-4" style="font-size: 1.15rem; color: #333;">
                                    <p>
                                        To help brands to grow, connect, and stand out in the digital world. We do not just create digital assets, we design digital experiences which see results and which also provide long term value.
                                    </p>
                                    <p>
                                        Originally in Dubai UAE, WB-Digitech which in 2024 took its growth to Dubai to better serve our expanding global client base. Now we are working with companies across many industries which we help to turn their concepts into digital works of art.
                                    </p>
                                </div>
                                
                                <h3 class="wb-box-title mt-4" style="color: #0A3D62; font-weight: 700;">Who We Are</h3>
                                <div class="wb-rich-text" style="font-size: 1.05rem; color: #555;">
                                    <p>
                                        At WB-DigiTech creativity is at the core of our strategy. We are of the belief that great digital solutions are brought to life when innovation, data and design come together. Our team which includes designers, developers, marketers and SEO specialists works in close collaboration with clients to see beyond what they want and determine what it is they really need to reach their business objectives.
                                    </p>
                                    <p class="mt-4">
                                        We put the same level of focus and skill into each of the projects we take on, we see our clients' brands as extensions of our own which is why we ensure quality and transparency at every step.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Image -->
                        <div class="col-lg-6">
                            <div class="position-relative text-center" style="height: 100%; padding: 20px;">
                                <img src="{{ asset('css/new-assets/about_us/image_about.webp') }}" alt="About Us" style="width:100%; max-width: 600px; height: auto; border-radius: 24px; object-fit: contain;">
                                <div style="position: absolute; bottom: 40px; right: 40px; background: #0A3D62; color: white; padding: 15px 30px; border-radius: 50px; font-weight: 700; font-size: 16px; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                                    Since 2019
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- What We Do Section -->
            <section class="py-5 bg-light">
                <div class="container container-1500">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <span class="text-uppercase mb-2" style="color: #CC7A00; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Services</span>
                            <h2 class="fw-bolder" style="color: #0A3D62; font-size: 2.5rem;">What We Do</h2>
                            <p class="text-muted" style="font-size: 1.2rem;">We present full scale digital solutions for your brand's needs:</p>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="wb-card-box wb-card-box-hoverable text-center">
                                <div class="mb-4" style="font-size: 2.5rem;">🌐</div>
                                <h4 class="fw-bold mb-4 pb-3 border-bottom" style="color: #0A3D62;">Web & Mobile</h4>
                                <ul class="list-unstyled text-start wb-rich-text">
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Web Design and Development:</strong> Fast, mobile friendly and attractive websites.
                                    </li>
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Mobile App Development:</strong> easy to use and scalable applications.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="wb-card-box wb-card-box-hoverable text-center">
                                <div class="mb-4" style="font-size: 2.5rem;">📈</div>
                                <h4 class="fw-bold mb-4 pb-3 border-bottom" style="color: #0A3D62;">Marketing & SEO</h4>
                                <ul class="list-unstyled text-start wb-rich-text">
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Digital Marketing:</strong> strategies that deliver traffic and results.
                                    </li>
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Search Engine Optimization:</strong> data informed SEO for the long term rank and growth.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="wb-card-box wb-card-box-hoverable text-center">
                                <div class="mb-4" style="font-size: 2.5rem;">🎨</div>
                                <h4 class="fw-bold mb-4 pb-3 border-bottom" style="color: #0A3D62;">Creative & Social</h4>
                                <ul class="list-unstyled text-start wb-rich-text">
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Social media marketing:</strong> which includes growing communities and building brand authority.
                                    </li>
                                    <li class="mb-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <strong>Graphic Design:</strong> which tells your brand story through visual creativity.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic" style="font-size: 1.1rem; background: #fff; padding: 20px 40px; border-radius: 50px; display: inline-block; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                                From small businesses just out of the gate to well established companies we help in developing a great digital presence which produces real results.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Approach Section -->
            <section class="py-5">
                <div class="container container-1500">
                    <div class="wb-gradient-bg" style="border-radius: 20px; padding: 60px 40px; box-shadow: 0 20px 40px rgba(10, 61, 98, 0.2);">
                        <div class="text-center mb-5">
                            <h2 class="fw-bolder text-white" style="font-size: 2.5rem;">Our Approach</h2>
                            <p class="text-white" style="font-size: 1.2rem; opacity: 0.9;">Our approach is simple but powerful:</p>
                        </div>

                        <div class="row g-4 text-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="display-4 mb-3">🎯</div>
                                <h4 class="fw-bold text-white mb-3">Strategy First</h4>
                                <p style="color: #e2e8f0;">we integrate every solution to your business goals.</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="display-4 mb-3">✨</div>
                                <h4 class="fw-bold text-white mb-3">Creative Implementation</h4>
                                <p style="color: #e2e8f0;">which includes designs and campaigns that grab attention and inspire action.</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="display-4 mb-3">📊</div>
                                <h4 class="fw-bold text-white mb-3">Performance Based</h4>
                                <p style="color: #e2e8f0;">we base every decision on what we see from performance data.</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="display-4 mb-3">❤️</div>
                                <h4 class="fw-bold text-white mb-3">Client First</h4>
                                <p style="color: #e2e8f0;">What we achieve is what you achieve.</p>
                            </div>
                        </div>

                        <div class="text-center mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.2);">
                            <p class="mb-0 fst-italic" style="font-size: 1.1rem; color: #e2e8f0;">
                                We are of the mind that there is no one size fits all solution. Each brand is unique which is also true for our strategy.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us & Our Work Sections -->
            <section class="py-5 bg-light">
                <div class="container container-1500">
                    <div class="row g-5">
                        
                        <!-- Our Work -->
                        <div class="col-lg-6">
                            <div class="wb-card-box">
                                <h2 class="fw-bolder text-center mb-4" style="color: #0A3D62;">Our Work</h2>
                                <p class="text-center text-muted mb-5">Over the years, we've successfully delivered:</p>
                                
                                <div class="row g-3 text-center">
                                    <div class="col-sm-6">
                                        <div class="wb-stat-card">
                                            <span class="display-5 fw-bold wb-gradient-text">50+</span>
                                            <p class="mt-2 fw-semibold text-muted mb-0">Website Development Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="wb-stat-card">
                                            <span class="display-5 fw-bold wb-gradient-text">100+</span>
                                            <p class="mt-2 fw-semibold text-muted mb-0">Graphic Designing Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="wb-stat-card">
                                            <span class="display-5 fw-bold wb-gradient-text">40+</span>
                                            <p class="mt-2 fw-semibold text-muted mb-0">SEO Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="wb-stat-card">
                                            <span class="display-5 fw-bold wb-gradient-text">30+</span>
                                            <p class="mt-2 fw-semibold text-muted mb-0">Google Ads Campaigns</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="wb-stat-card">
                                            <span class="display-5 fw-bold wb-gradient-text">25+</span>
                                            <p class="mt-2 fw-semibold text-muted mb-0">Social Media Campaigns</p>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-center mt-4 mb-0 fst-italic text-muted">
                                    Each of our projects is a display of our commitment to quality, creativity, and measurable growth.
                                </p>
                            </div>
                        </div>

                        <!-- Why Choose Us -->
                        <div class="col-lg-6">
                            <div class="wb-card-box">
                                <h2 class="fw-bolder text-center mb-5" style="color: #0A3D62;">Why Choose WB‑Digitech?</h2>
                                
                                <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                                    <div style="background: rgba(0, 180, 216, 0.1); padding: 15px; border-radius: 50%; margin-right: 20px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: #0A3D62;">Proven expertise</h5>
                                        <p class="text-muted mb-0">across digital disciplines</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                                    <div style="background: rgba(0, 180, 216, 0.1); padding: 15px; border-radius: 50%; margin-right: 20px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: #0A3D62;">Transparent communication</h5>
                                        <p class="text-muted mb-0">and reliable support</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                                    <div style="background: rgba(0, 180, 216, 0.1); padding: 15px; border-radius: 50%; margin-right: 20px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: #0A3D62;">Global experience</h5>
                                        <p class="text-muted mb-0">with local market understanding</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                    <div style="background: rgba(0, 180, 216, 0.1); padding: 15px; border-radius: 50%; margin-right: 20px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1" style="color: #0A3D62;">Dedicated team</h5>
                                        <p class="text-muted mb-0">that is into growth and innovation.</p>
                                    </div>
                                </div>

                                <div class="text-center p-4 rounded-3" style="background: #f8fafc; border: 1px dashed #cbd5e0;">
                                    <p class="fw-bold mb-0" style="font-size: 1.2rem; color: #0A3D62;">
                                        When you work with WB-Digitech you have a digital partner, not a service provider.
                                    </p>
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