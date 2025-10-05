@extends('layouts.homelayout')

@section('title', 'Home - WB-DIGITECH')

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
                Save Time <br> Finding The Right <br> Agency Partner
                </h2>
                </div>

                <!-- Hero Content -->
                <div class="tp-hero-content text-center">
                    <h1 class="h1-home-page">
                        Digital Marketing Agency Dubai | Expert Services for Your Success
                    </h1>
                    <p class="delay-load">
                        WB-DigiTech is a leading digital marketing agency in Dubai, UAE. We help brands and businesses maximize their digital effectiveness.
                    </p>
                    <p class="more-content-top d-none d-lg-block">
                        Our expert team provides 360-degree digital marketing solutions including SEO, Google Ads, social media marketing, web design, content creation, and more. Contact us now to boost your sales and grow your business.
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
<section class="agency-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Visual / Image Column -->
            <div class="col-lg-6">  
                <div class="position-relative">
                    <div class="visual-card shadow-lg rounded overflow-hidden">
                        <img src="{{ asset('css/new-assets/img/home-01/hero/thumb-one.png') }}" alt="wbdigitech-services" class="img-fluid w-100">
                        <div class="trusted-badge">Trusted Agency</div>
                    </div>

                    <div class="floating-card d-none d-md-block">
                        <div class="card p-3 rounded shadow-sm bg-white">
                            <div class="d-flex align-items-center">
                                <div class="me-3 text-primary fs-3"><i class="fa-solid fa-briefcase"></i></div>
                                <div>
                                    <h6 class="mb-0">500+ Projects</h6>
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
                <h2 class="title display-5 fw-bold mt-2">Work with the Best Digital Marketing Solutions in Dubai</h2>
                <p class="lead text-muted mt-3">As a <a href="#">top digital marketing agency Dubai</a>, we blend creativity, strategy and technology to craft digital experiences that convert visitors into customers.</p>

                <ul class="list-unstyled mt-4 features-list">
                    <li class="d-flex mb-3">
                        <div class="icon me-3 text-primary"><i class="fa-solid fa-check-circle fa-lg"></i></div>
                        <div>
                            <strong>High-converting Websites</strong>
                            <div class="small text-muted">Responsive designs focused on conversion and speed.</div>
                        </div>
                    </li>
                    <li class="d-flex mb-3">

                        <div class="icon me-3 text-primary"><i class="fa-solid fa-bullhorn fa-lg"></i></div>
                        <div>
                            <strong>Integrated Marketing</strong>
                            <div class="small text-muted">SEO, Ads, Social & content — a full-funnel approach.</div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="icon me-3 text-primary"><i class="fa-solid fa-headset fa-lg"></i></div>
                        <div>
                            <strong>Dedicated Support</strong>
                            <div class="small text-muted">Local team, fast responses, ongoing optimisation.</div>
                        </div>
                    </li>
                </ul>

                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient btn-lg me-3">Get a Free Quote</a>
                    <a href="/services" class="btn btn-outline-secondary btn-lg">See Our Services</a>
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
                                                <h4 class="tp-section-title"><span>Our Bespoke Digital marketing Services in Dubai, UAE</span></h4>
                                                <p> “As a top-notch digital marketing agency, we offer beautiful designs, cutting-edge technology, smart services, and more.” </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex main-service">
                                            <div class="home-page rounded web-development">
                                                <div class="html-component mt-5">
                                                    <div class="title text-white"><a href="#">Website Development</a></div>
                                                    <div class="sub-title text-white"> We develop any type of modern technologies websites. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded lead-generation d-none">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Graphics Design</a></div>
                                                    <div class="sub-title text-white"> Volga Tigris, a leading graphic design company in Dubai, has been providing the best creative and innovative graphic solutions to our clients-home across UAE for years </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded seo">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">SEO</a></div>
                                                    <div class="sub-title text-white"> We make your business stand out among the crowd even if there is any high competition in business. We bring your business success among others through our best SEO practices. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded google-ads">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Lead Generation</a></div>
                                                    <div class="sub-title text-white"> Our secret chemistry of success for each industry dealing with us, we learn your business. We find the right customers for you. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded call-center">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Call Center Service</a></div>
                                                    <div class="sub-title text-white"> We undertake all types of BPO and Call Center Jobs. we are operating with our in-house team from the Dubai office. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded social-meida-marketing">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Social Media Marketing</a></div>
                                                    <div class="sub-title text-white"> Reach, attract, engage, and convert, these are the fundamental policy of social media marketing. Tie up with us for your business success. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded data-entry">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Data Entry / Data Cleansing</a></div>
                                                    <div class="sub-title text-white"> We undertake all data-related work from hard to soft copy, data entry services, cleansing, and more. </div>
                                                </div>
                                            </div>
                                            <div class="home-page rounded customer-satisfaction">
                                                <div class="html-component">
                                                    <div class="title text-white"><a href="#">Customer Satisfaction Survey</a></div>
                                                    <div class="sub-title text-white"> Know your customer mind with our best survey team, we do online and direct surveys. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

{{-- Customers / Clients --}}
<section class="pt-100 pb-100 logo-slider-wrapper bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="agency__content section__content text-center mb-5">
            <span class="sub-title"> Featured Clients <i class="fa-solid fa-arrow-right"></i></span>
            <h2 class="title title-anim" style="color: linear-gradient(90deg, #0e5689, #0077B6);">Our Customers</h2>
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

{{-- Headline --}}
                            <div class="container-fluid we-promise-slide mb-20 mt-10 bg-dark">
                                <div class="row align-items-center pt-20 pb-20">
                                    <div class="col-xl-12">
                                        <div class="marquee">
                                            <div class="marquee-content"><span class="textline-1">We Promise <i class="fa fa-arrow-down-right"></i></span><span class="textline-2 d-flex align-self-center">We Deliver <i class="fa fa-arrow-down-right"></i></span><span class="textline-1">We Promise <i class="fa fa-arrow-down-right"></i></span>
                                                <span
                                                    class="textline-2 d-flex align-self-center">We Deliver <i class="fa fa-arrow-down-right"></i></span><span class="textline-1">We Promise <i class="fa fa-arrow-down-right"></i></span><span class="textline-2 d-flex align-self-center">We Deliver <i class="fa fa-arrow-down-right"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

 {{-- Industries We Serve --}}
<div class="tp-project-area fix">
    <div class="tp-project-gallery-wrapper">
        <div class="container container-1630">
            <div class="tp-project-gallery-top pb-20 text-center">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <h2 class="my-30 tp-section-title">Industries We Serve</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    {{-- Industries Section --}}
                    @forelse($industries as $industry)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                            <div class="card shadow-sm border-0 h-100 text-center">
                                <div class="card-body p-4 d-flex flex-column align-items-center">
                                    @if(!empty($industry->image) && file_exists(public_path('storage/'.$industry->image)))
                                        <img src="{{ asset('storage/'.$industry->image) }}"
                                            alt="{{ $industry->name ?? 'Industry' }}"
                                            class="img-fluid mb-3 industry-img">
                                    @else
                                        <img src="{{ asset('images/default-industry.png') }}" 
                                            alt="Default Industry" 
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
                        <a href="/customer" class="btn btn-warning  mr-10">View More</a>
                        <a class="btn btn-warning  open-popup">Get A Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Blog Section --}}
<section class="home-blog-section py-5 bg-dark text-white">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                <h2 class="sv-service-title text-white">Our Latest Blogs</h2>
                <p class="text-white-50 mt-2">Read our latest insights, news, and updates.</p>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="row g-4">
            @forelse($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card-wrap">
                        <article class="blog-card h-100 rounded overflow-hidden position-relative">
                            <div class="media-wrap position-relative">
                                <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}" class="d-block">
                                    @if(!empty($blog->image) && file_exists(public_path('storage/'.$blog->image)))
                                        <img loading="lazy" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title ?? 'Blog Image' }}" class="img-fluid blog-card-img w-100">
                                    @else
                                        <img loading="lazy" src="{{ asset('images/default-blog.png') }}" alt="Default Blog Image" class="img-fluid blog-card-img w-100">
                                    @endif
                                    <div class="blog-gradient-top"></div>
                                </a>
                                <div class="blog-overlay"></div>
                                <span class="blog-date badge bg-white text-dark position-absolute"><i class="fa fa-calendar me-1"></i> {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'Date N/A' }}</span>
                            </div>

                            <div class="blog-card-body p-4 bg-dark">
                                <h4 class="blog-card-title h5 mb-2"><a href="{{ route('blogs.public.show', $blog->id ?? 0) }}" class="text-white text-decoration-none">{{ $blog->title ?? 'Untitled Blog' }}</a></h4>
                                <p class="text-white-50 mb-3">{{ Str::limit($blog->excerpt ?? '', 120, '...') }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}" class="btn btn-sm btn-gradient">Read More</a>
                                    <div class="meta small text-white">By WB-DigiTech • <span class="reading-time">{{ rand(2,6) }} min</span></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-white">No blogs published yet.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Scoped styles for blog grid -->
    <style>
    /* Wrapper adds subtle gradient border and glass effect */
    .home-blog-section .blog-card-wrap{ padding:6px; border-radius:14px; background:linear-gradient(180deg, rgba(18,135,203,0.06), rgba(10,61,98,0.03)); }
    .home-blog-section .blog-card{ background:rgba(8,12,18,0.6); border-radius:10px; overflow:hidden; display:flex; flex-direction:column; transition: transform .35s ease, box-shadow .35s ease; backdrop-filter: blur(6px); }
    .home-blog-section .blog-card:hover{ transform: translateY(-10px); box-shadow: 0 20px 40px rgba(2,6,23,0.6); }

    .home-blog-section .media-wrap{ position:relative; }
    .home-blog-section .blog-card-img{ height:260px; object-fit:cover; display:block; transition: transform .6s cubic-bezier(.2,.8,.2,1); }
    .home-blog-section .blog-card:hover .blog-card-img{ transform: scale(1.08); }

    .home-blog-section .blog-gradient-top{ position:absolute; left:0; right:0; top:0; height:64px; background: linear-gradient(90deg, rgba(10,61,98,0.95), rgba(18,135,203,0.9)); opacity:0.0; transition: opacity .35s ease; }
    .home-blog-section .blog-card:hover .blog-gradient-top{ opacity:0.08; }

    .home-blog-section .blog-overlay{ position:absolute; left:0; right:0; bottom:0; height:60%; background: linear-gradient(180deg, rgba(0,0,0,0.04), rgba(0,0,0,0.5)); }

    .home-blog-section .blog-date{ top:14px; left:14px; font-weight:700; border-radius:8px; padding:6px 10px; box-shadow:0 6px 18px rgba(2,6,23,0.35); }

    .home-blog-section .blog-card-body{ padding:18px; }
    .home-blog-section .blog-card-title{ font-weight:700; font-size:1.05rem; }
    .home-blog-section .blog-card-title a{ color:#fff; }
    .home-blog-section .blog-card-title a:hover{ text-decoration:underline; }

    .home-blog-section .btn-gradient{ background: linear-gradient(90deg,#0A3D62,#1287cb); color:#fff; border:none; padding:6px 12px; border-radius:6px; }
    .home-blog-section .btn-gradient:hover{ opacity:0.95; }

    .home-blog-section .meta{ color:rgba(255,255,255,0.6); }

    /* Small screens */
    @media (max-width: 768px){
        .home-blog-section .blog-card-img{ height:200px; }
    }
    @media (max-width: 576px){
        .home-blog-section .blog-card-img{ height:160px; }
        .home-blog-section .blog-card-body{ padding:14px; }
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



<section class="tp-about-area pt-80 pb-80 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 text-center">
                <div class="tp-about-content">
                    <h2 class="tp-section-title text-dark mb-4">
                        Enhance Your Business Growth with WB-DigiTech
                    </h2>
                    <p class="text-muted mb-3">
                        WB-DigiTech is a leading digital marketing agency in Dubai, UAE, offering 360-degree solutions including SEO, social media marketing, web design, content creation, and PPC services. 
                        We help businesses maximize their online presence, generate quality leads, and achieve measurable results.
                    </p>
                    <p class="text-muted mb-4">
                        Our expert team combines creativity and technology to deliver tailored strategies that drive traffic, increase conversions, and grow your business.
                    </p>
                    <a href="/contact-us" class="btn btn-gradient-primary">Get a Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

                    </div>
                    <p> </p>
                </div>
        </div>
        </main>
@endsection
