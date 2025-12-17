@extends('layouts.homelayout')


@section('title', 'Best Digital Marketing Agency in Dubai UAE | Marketing Company')

@section('meta')
    <meta name="description" content="A leading digital marketing agency in Dubai offering SEO, web design, web development, PPC and GMB SEO services. Grow your brand visibility online today. Book us!">
    <meta name="keywords" content="digital marketing agency, digital marketing company, SEO Dubai, PPC Dubai, web design Dubai, GMB SEO Dubai, marketing agency UAE, WB-DigiTech">
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
  
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div id="main-content">
                    <div class="ck-content">
                        <p> </p>
                        <div class="raw-html-embed"> 
                            <div class="tp-hero-area tp-hero-ptb main-slider">
                            <div class="container-fluid home-main-slider">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-12">
                <!-- Hero Title -->
                <div class="tp-hero-title-wrap mb-35 text-center">
                <h2 class="tp-hero-title gradient-text"> 
                Leading Digital Marketing<br> Agency in Dubai,UAE
                </h2>
                </div>

                <!-- Hero Content -->
                <div class="tp-hero-content text-center">
                    <p class="delay-load">
                        WB DIGITECH is rated one of the finest digital marketing agencies in the city of Dubai providing cool, affordable and result oriented solutions to firms in any line of business.<small style="color:#0A3D62; font-weight: bold;">Since 2024</small> we are a leading agency in Dubai and the entire UAE, we combine innovative concepts with sound strategies to make brands grow, reach people, and slay in this ruthless online market.
                    </p>
                    <p class="more-content-top d-none d-lg-block">
                       Our in-house team of web developers, designers, search engine optimization experts, Google Ads geniuses, social media geniuses, content authors, and creative individuals has you covered in all 360-degrees of digital marketing. We do not merely place online advertisements, but we do content marketing, branding, market research, and customer engagement based on data.You may be a start-up with the need to make a splash or you may be an established brand seeking to expand, WB Digitech is your stable partner and the best marketing firm in Dubai, UAE- helping businesses achieve tangible results and continue to grow sustainably.
                    </p>
                    <div class="hero-btns mt-4">
                        <a href="{{ route('contact')}}" class="btn btn-gradient">Get a Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Agency Section -->
<section class="agency-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Visual / Image Column -->
            <div class="col-lg-6">  
                <div class="position-relative">
                    <div class="visual-card shadow-lg rounded overflow-hidden">
                        <img src="{{ asset('css/new-assets/services_home/main.webp') }}" alt="wbdigitech-services" class="img-fluid w-100">
                        <div class="trusted-badge">Trusted Agency</div>
                    </div>

                    <div class="floating-card d-none d-md-block">
                        <div class="card p-3 rounded shadow-sm bg-white">
                            <div class="d-flex align-items-center">
                                <div class="me-3 fs-3" style="color:#0A3D62"><i class="fa-solid fa-briefcase"></i></div>
                                <div>
                                    <h6 class="mb-0">50+ Projects</h6>
                                    <small class="text-muted">Delivered with excellence</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-6">
                <span class="sub-title text-primary">WELCOME <i class="fa-solid fa-arrow-right"></i></span>
                <h2 class="title display-7 fw-bold mt-2">Work with The Most Effective Digital Marketing Solutions In Dubai</h2>
                <p class="lead text-muted mt-3">We understand at WB Digitech that digital success does not only lie in search advertising or technical SEO, but it is all about blending creativity, planning, and new thoughts. As one of the best advertising locations in Dubai, we go beyond the generic tricks to provide awesome social media and marketing services that actually work to connect the brands to their people.</p>

                <ul class="list-unstyled mt-4 features-list">
                    <li class="d-flex mb-3">
                        <div class="icon me-3 " style="color:#0A3D62"><i class="fa-solid fa-check-circle fa-lg"></i></div>
                        <div>
                            <strong>High-converting Websites</strong>
                            <div class="small text-muted">Responsive designs focused on conversion and speed.</div>
                        </div>
                    </li>
                    <li class="d-flex mb-3">

                        <div class="icon me-3" style="color:#0A3D62"><i class="fa-solid fa-bullhorn fa-lg"></i></div>
                        <div>
                            <strong>Integrated Marketing</strong>
                            <div class="small text-muted">SEO, Ads, Social & content — a full-funnel approach.</div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon me-3 "style="color:#0A3D62"><i class="fa-solid fa-headset fa-lg"></i></div>
                        <div>
                            <strong>Dedicated Support</strong>
                            <div class="small text-muted">Local team, fast responses, ongoing optimisation.</div>
                        </div>
                    </li>
                </ul>

              <div class="mt-4 d-flex flex-column flex-sm-row gap-3">
                <a href="{{ route('contact') }}" class="btn btn-gradient btn-lg">Get a Free Quote</a>
                <a href="{{ route('ai_marketing') }}" class="btn btn-outline-secondary btn-lg">See Our Services</a>
            </div>
            </div>
        </div>
    </div>

    <!-- Scoped styles for agency section -->
    <style>
    .agency-section .visual-card{ position: relative; overflow: hidden; border-radius: 14px; }
    .agency-section .visual-card img{ display:block; height:100%; object-fit:cover; }
    .agency-section .trusted-badge{ position:absolute; left:18px; top:18px; background:#fff; color:#0A3D62; padding:6px 12px; border-radius:8px; font-weight:600; box-shadow:0 6px 18px rgba(10,61,98,0.12); }
    .agency-section .floating-card{ position:absolute; right:0; bottom:-30px; width:220px; transform:translateY(0); }
    .agency-section .features-list .icon{ width:38px; display:flex; align-items:center; justify-content:center; }
    .agency-section .title{ color:#0A3D62; }
    .btn-gradient{ background: linear-gradient(90deg,#0A3D62,#1287cb); color:#fff; border:none; }
    .btn-gradient:hover{ opacity:0.95; }

    /* Responsive adjustments */
    @media (max-width: 991px){
        .agency-section .floating-card{ display:none; }
        .agency-section .title{ font-size:1.6rem; }
    }
    </style>
</section>

{{-- Services Area  --}}
     <div class="tp-service-area pt-100 pb-50 tp-btn-trigger d-none d-lg-block">
                                <div class="container services">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12">
                                            <div class="tp-award-title-box text-center">
                                                <h2 class="title-anim" style="color:#0A3D62">Our Custom-made Digital Marketing Services in Dubai, UAE</h2>
                                                <p> As one of the leading digital marketing agencies, we make the roll with innovative designs, innovative technology, solutions, smart tactics and others. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex main-service">
                                            <div class="home-page rounded web-development">
                                                <div class="html-component mt-5">
                                                    <div class="title text-white"><a href="{{ route('services.web_dev') }}">Website Development</a></div>
                                                    <div class="sub-title text-white"> Our team creates custom websites that are easy to use, look great and work perfectly on all devices to showcase your business.</div>
                                                </div>
                                            </div>
                                          <div class="home-page rounded seo">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.seo') }}">SEO / ASO </a></div>
                                                    <div class="sub-title text-white"> Want more people to find your business online? Our expert SEO services boost your website's visibility on Google, drive quality traffic to your site, and help you stay ahead of your competitors effortlessly. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded lead-generation">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.lead_generation') }}">Lead Generation</a></div>
                                                    <div class="sub-title text-white"> We bring qualified leads straight to your business! Our proven strategies help you connect with potential customers who are genuinely interested in what you offer, turning visitors into loyal clients and growing your sales consistently. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded mobile-app">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.mobile') }}">Mobile App Development</a></div>
                                                    <div class="sub-title text-white"> Let our professional team handle your customer calls and support while you focus on growing your business. We deliver exceptional customer service that keeps your clients satisfied and coming back. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded social-media-marketing">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.smm') }}">Social Media Marketing</a></div>
                                                    <div class="sub-title text-white"> Our digital marketing experts handle your social media, create scroll-stopping content, and connect you with customers who love what you do. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded graphic-design">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{  route('services.graphic') }}">Graphic Designing</a></div>
                                                    <div class="sub-title text-white"> We type and organize your data fast and correctly. Our data processing team cleans up messy files and makes everything neat and easy to use for your business. </div>
                                                </div>
                                            </div> 
                                               <div class="home-page rounded google-ads">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.google_ads_management') }}">Google Ads</a></div>
                                                    <div class="sub-title text-white"> We help you understand your customers better. Our expert team runs market research surveys online and in person to collect valuable insights for your business success. </div>
                                                </div>
                                            </div> 
                                               <div class="home-page rounded videography">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="{{ route('services.videography') }}">Videography</a></div>
                                                    <div class="sub-title text-white"> We help you understand your customers better. Our expert team runs market research surveys online and in person to collect valuable insights for your business success. </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
.home-page {
    position: relative; /* needed for overlay */
    overflow: hidden; 
    display: flex;
    flex-direction: column;
    justify-content: center; /* vertically center content */
    padding: 20px; /* keep original spacing */
    min-height: 250px; /* optional: maintain consistent height */
}

.home-page::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6); /* dark overlay */
    z-index: 1;
    pointer-events: none;
}

.home-page .html-component {
    /* position: relative;  */
    padding: 10px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center; /* vertically center text inside the box */
    /* height: 70%; fill parent height */
}
</style>

{{-- Customers / Clients --}}
<section class="pt-10 pb-100 logo-slider-wrapper bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="agency__content section__content text-center mb-5">
            <h2 class="title title-anim" style="color:#0A3D62">Our Customers</h2>
        </div>

        <!-- Logo Slider 1 -->
        <div class="logo-slider">
            <div class="logos-list">
                @foreach ($customers as $customer)
                <div class="item">
                    <div class="image-box">
                        <div class="image-box-wrapper">
                            <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->name }}" class="img-fluid grayscale-hover">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Logo Slider 2 (reverse) -->
        <div class="logo-slider mt-5">
            <div class="logos-list reverse">
                @foreach ($customers as $customer)
                <div class="item">
                    <div class="image-box">
                        <div class="image-box-wrapper">
                           <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->name }}" class="img-fluid grayscale-hover">

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Headline Section --}}
<section class="we-promise-banner">
    <div class="scrolling-text">
        <div class="scrolling-content">
            <span class="outline">WE PROMISE 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
            <span class="filled">WE DELIVER 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
            <span class="outline">WE PROMISE 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
            <span class="filled">WE DELIVER 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
            <span class="outline">WE PROMISE 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
            <span class="filled">WE DELIVER 
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 24 24">
                    <path d="M7 7h10v10" stroke="#ffffff" stroke-width="2" fill="none"/>
                    <path d="M7 17 17 7" stroke="#ffffff" stroke-width="2" fill="none"/>
                </svg>
            </span>
        </div>
    </div>

    <style>
        .we-promise-banner {
            background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%);
            overflow: hidden;
            white-space: nowrap;
            padding: 12px 0;
        }

        .scrolling-text {
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .scrolling-content {
            display: inline-flex;
            align-items: center;
            animation: scroll-left 22s linear infinite;
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .scrolling-content span {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 4.5rem;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            margin-right: 60px;
        }

        .outline {
            color: transparent;
            -webkit-text-stroke: 1.5px #ffffff;
        }

        .filled {
            color: #ffffff;
        }

        .arrow {
            width: 80px;
            height: 80px;
            margin-left: 12px;
        }

        @media (max-width: 992px) {
            .scrolling-content span {
                font-size: 3rem;
                margin-right: 40px;
            }
            .arrow {
                width: 30px;
                height: 30px;
            }
        }

        @media (max-width: 576px) {
            .scrolling-content span {
                font-size: 2rem;
                margin-right: 30px;
            }
            .arrow {
                width: 22px;
                height: 22px;
            }
        }
    </style>
</section>


 {{-- Industries We Serve --}}
 <br>
<div class="tp-project-area fix pt-10">
    <div class="tp-project-gallery-wrapper">
        <div class="container container-1630">
            <div class="tp-project-gallery-top pb-20 text-center">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <br>
                        <h2 class="my-30 tp-section-title" style="color:#0A3D62">Industries We Serve</h2>
                        <br>
                    </div>
                </div>

<div class="row justify-content-center">
    {{-- Industries Section --}}
    @forelse($industries as $industry)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-body p-4 d-flex flex-column align-items-center">
                    @if(!empty($industry->image))
                        <img src="{{ asset('storage/'.$industry->image) }}"
                            alt="{{ $industry->name ?? 'Industry' }}"
                            class="img-fluid mb-3 industry-img">
                    @endif
                    <h6 class="fw-bold text-dark">
                        {{ $industry->name ?? 'Unnamed Industry' }}
                    </h6>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p class="text-muted">No industries available at the moment.</p>
        </div>
    @endforelse

    <div class="col-12 text-center pb-20">
        <a href="{{ route('customers.public') }}" class="btn btn-warning  mr-10">View More</a>
        <a href="{{ route('contact') }}" class="btn btn-warning  open-popup">Get A Free Quote</a>
    </div>
</div>


{{-- Blog Section --}}
<section class="home-blog-section py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Section: Title -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h2 class="fw-bold text-primary mb-3">Latest<br><span class="text-dark"> Insights & Guides</span></h2>
                <hr class="border-2 border-primary mb-4" style="width:50px;">
                <a href="{{ route('blogs.public') }}" class="btn btn-link text-decoration-none text-primary fs-6 fw-semibold p-0">
                    READ OUR BLOG <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>

            <!-- Right Section: Blogs -->
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse($blogs->take(2) as $blog)
                        <div class="col-md-6">
                            <div class="blog-item bg-white border-0 shadow-sm h-100">
                                @if(!empty($blog->image))
                                    <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" 
                                             alt="{{ $blog->title ?? 'Blog Image' }}" 
                                             class="img-fluid rounded-top w-100 blog-img">
                                    </a>
                                @endif
                                <div class="p-3">
                                    <h5 class="fw-bold text-dark mb-1">
                                        <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}" 
                                           class="text-dark text-decoration-none">
                                           {{ $blog->title ?? 'Untitled Blog' }}
                                        </a>
                                    </h5>
                                    <p class="text-muted small mb-2">
                                        {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Date N/A' }} | by Admin
                                    </p>
                                    <p class="text-secondary small mb-3">
                                        {{ Str::limit($blog->excerpt ?? '', 100, '...') }}
                                    </p>
                                    <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}" 
                                       class="text-primary text-decoration-none fw-semibold">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">No blogs published yet.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <style>
        .home-blog-section {
            font-family: 'Poppins', sans-serif;
        }

        .home-blog-section h2 {
            font-size: 2.3rem;
            line-height: 1.2;
        }

        .home-blog-section .blog-item {
            transition: all 0.3s ease-in-out;
            border-radius: 12px;
        }

        .home-blog-section .blog-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .home-blog-section .blog-img {
            height: 230px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .home-blog-section .text-primary {
            color: #0A3D62 !important;
        }

        @media (max-width: 767px) {
            .home-blog-section h2 {
                font-size: 1.8rem;
            }
            .home-blog-section .blog-img {
                height: 180px;
            }
        }
    </style>
</section>


{{-- Testimonial Section --}}
<div class="tp-testimonial-area pt-50 pb-70" style="background:#fff;">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center mb-40">
            <div class="col-md-8 text-center">
                <h2 class="sv-service-title fw-bold" style="color: #0A3D62">What Our Clients Say</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-md-12 text-center">
                <div class="review-summary-card p-4 shadow-sm rounded">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/2965/2965358.png" alt="Google Store" width="50" class="me-3">
                        <div class="text-start">
                            <h5 class="mb-0 fw-bold">WB-DigiTech - Digital Marketing Agency</h5>
                            <div class="review-rating">
                                <span class="fw-bold fs-4 text-dark">4.9</span>
                                <span class="text-warning">
                                    ★★★★★
                                </span>
                            </div>
                            <p class="mb-0 text-muted small">Based on 41 reviews</p>
                        </div>
                    </div>
                    <a href="https://g.page/your-google-link" target="_blank" class="btn btn-primary rounded-pill">
                        <i class="fab fa-google me-1"></i> Review us on Google
                    </a>
                </div>
            </div>
        </div>

        <!-- Review Cards Slider -->
        <div class="swiper-container tp-testimonial-slider-active">
            <div class="swiper-wrapper">
                <!-- Review 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card bg-white shadow-sm rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Reviewer" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-bold mb-0">Mohammad Usman</h6>
                                <small class="text-muted">5 months ago</small>
                            </div>
                            <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" class="ms-auto" width="20" alt="Google Logo">
                        </div>
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="text-muted">Amazing experience! WB-DigiTech built us a fantastic website and provided excellent support throughout.</p>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card bg-white shadow-sm rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width:45px; height:45px;">A</div>
                            <div>
                                <h6 class="fw-bold mb-0">Ayesha Tech</h6>
                                <small class="text-muted">6 months ago</small>
                            </div>
                            <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" class="ms-auto" width="20" alt="Google Logo">
                        </div>
                        <div class="text-warning mb-2">★★★★☆</div>
                        <p class="text-muted">We had a great experience with WB-DigiTech. They delivered exactly what we wanted for our brand identity.</p>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card bg-white shadow-sm rounded p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Reviewer" class="rounded-circle me-3" width="45" height="45">
                            <div>
                                <h6 class="fw-bold mb-0">Fatima Khan</h6>
                                <small class="text-muted">2 months ago</small>
                            </div>
                            <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" class="ms-auto" width="20" alt="Google Logo">
                        </div>
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="text-muted">Their SEO and marketing services helped us increase leads significantly. Highly recommended!</p>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<style>
    .review-summary-card {
    background: #fff;
    border: 1px solid #eee;
}
.testimonial-card {
    border: 1px solid #eee;
    transition: transform 0.3s ease;
}
.testimonial-card:hover {
    transform: translateY(-5px);
}
.review-rating span {
    font-size: 1.2rem;
}
/* Fix side scroll issue */
.tp-testimonial-area {
    overflow-x: hidden; /* prevent horizontal scroll */
}

.swiper-container {
    width: 100% !important;
    max-width: 100% !important;
}

.swiper-wrapper {
    display: flex;
    width: 100%;
}

.swiper-slide {
    min-width: 0; /* allow shrink */
    box-sizing: border-box;
}

/* Ensure cards fit inside screen */
.testimonial-card {
    width: 100%;
    max-width: 100%;
    word-wrap: break-word;
}

/* Mobile spacing */
@media (max-width: 575px) {
    .testimonial-card {
        padding: 15px;
    }
    .review-summary-card {
        padding: 15px;
    }
}

</style>
                          
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



<section class="tp-about-area pt-80 pb-10 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 text-center">
                <div class="tp-about-content">
                    <h2 class="tp-section-title  mb-4" style="color:#0A3D62">
                        Boost Your Business With The Help of Digital Marketing Company
                    </h2>
                    <p class="text-muted mb-3">
                        WB Digitech is a results-driven digital marketing company that em-powers businesses to thrive in Dubai's highly competitive market. Recognized as a trusted digital marketing agency Dubai, we design innovative strategies that amplify your online presence, connect you with your target audience, and fuel sustainable growth.
                        Our vision is simple yet powerful: to help brands achieve maximum visibility across websites, search engines, and social media platforms. Backed by a team of experienced marketing experts and creative professionals, we deliver comprehensive digital marketing services, from content marketing and SEO to PPC, SEM, professional web de-velopment, web design, and graphic design.
                        With WB Digitech, you gain the expertise of certified specialists who craft data-driven campaigns that attract traffic, convert leads, and boost revenue. Our unique approach and proven results distinguish us as the best digital marketing agency in Dubai, trusted by busi-nesses across industries.
                        As a forward-thinking digital marketing company, we combine crea-tivity with technology to deliver strategies that truly resonate with modern-day customers. Whether it's through targeted ads, compel-ling content, or innovative design, our digital marketing solutions are built to position your brand ahead of competitors.
                        
                    </p>
                    <p class="text-muted mb-4">
                        Choose WB Degitech-you go-to marketing agency in Dubai-to engage effectively with potential customers, generate high-quality leads, and convert opportunities into measurable profits. When it comes to excellence, WB Digitech stands out among leading digital marketing agencies in the UAE.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</main>

@endsection
