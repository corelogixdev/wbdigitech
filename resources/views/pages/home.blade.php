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
<div class="agency section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Images -->
            <div class="col-lg-6">
                <div class="agency__thumb position-relative">
                    <img src="public/new-assets/img/home-01/hero/thumb-one.png" alt="volga-tigris-services" class="img-fluid rounded shadow-lg fade-left">
                    <img src="/storage/breadcrumb-banner/hand-shaking.jpg" alt="Experienced Marketing Agency" class="img-fluid rounded shadow-lg position-absolute top-50 start-50 translate-middle fade-right" style="width: 80%;">
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6">
                <div class="agency__content">
                    <span class="sub-title text-white">WELCOME <i class="fa-solid fa-arrow-right"></i></span>
                    <h2 class="title">Work with the Best Digital Marketing Solutions in Dubai</h2>
                    <p>
                        As a <a href="#">top digital marketing agency Dubai</a>, we know that search marketing isn’t just about links, technical SEO, and search ads. By combining technology and creativity, our expert teams craft exceptional digital experiences across all platforms.
                    </p>

                    <!-- Skills -->
                    <div class="skill-wrap mt-4">
                        <div class="skill-bar-single mb-3">
                            <p class="primary-text mb-1">Web Design</p>
                            <div class="progress">
                                <div class="progress-bar bg-gradient" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar-single mb-3">
                            <p class="primary-text mb-1">Complete Digital Marketing Solution</p>
                            <div class="progress">
                                <div class="progress-bar bg-gradient" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="skill-bar-single">
                            <p class="primary-text mb-1">SEO</p>
                            <div class="progress">
                                <div class="progress-bar bg-gradient" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                          <section class="pt-100 pb-100 logo-slider-wrapper bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="agency__content section__content text-center mb-5">
            <span class="sub-title"> Featured Clients <i class="fa-solid fa-arrow-right"></i></span>
            <h2 class="title title-anim text-dark">Our Customers</h2>
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
                            <img src="{{ asset($customer->logo) }}" alt="{{ $customer->name }}" class="img-fluid grayscale-hover">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


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
                            <div class="tp-project-area fix">
                                <div class="tp-project-gallery-wrapper">
                                    <div class="container container-1630">
                                        <div class="tp-project-gallery-top pb-20">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <h2 class="my-30 tp-section-title"> Industries<br> We Serve </h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- Industries Section --}}
                                                @forelse($industries as $industry)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                                                        <p class="text-muted ">No industries available at the moment.</p>
                                                    </div>
                                                @endforelse

                                                <div class="col-xl-12 col-lg-12 col-md-12 text-center pb-20">
                                                    <a href="/customer" class="btn btn-warning text-dark mr-10">View More</a>
                                                    <a class="btn btn-warning text-dark open-popup">Get A Free Quote</a>
                                                </div>
                                            </div>

                                            {{-- Blog Section --}}
                                            <div class="blog-details-realated-area pt-20 pb-20 bg-dark">
                                                <div class="container">
                                                    <div class="row mb-20">
                                                        <div class="col-md-12">
                                                            <h2 class="sv-service-title text-white">Our Latest Blogs</h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @forelse($blogs as $blog)
                                                            <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                                                                <div class="tp-blog-item">
                                                                    <div class="tp-blog-thumb fix p-relative rounded">
                                                                        @if(!empty($blog->image) && file_exists(public_path('storage/'.$blog->image)))
                                                                            <img src="{{ asset('storage/' . $blog->image) }}" 
                                                                                alt="{{ $blog->title ?? 'Blog Image' }}" 
                                                                                width="388" height="250">
                                                                        @else
                                                                            <img src="{{ asset('images/default-blog.png') }}" 
                                                                                alt="Default Blog Image" 
                                                                                width="388" height="250">
                                                                        @endif
                                                                        <div class="tp-blog-meta">
                                                                            <span class="bg-dark text-white">
                                                                                {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'Date N/A' }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tp-blog-content">
                                                                        <h2 class="tp-blog-title-sm text-white">
                                                                            <a href="{{ route('blogs.public.show', $blog->id ?? 0) }}">
                                                                                {{ $blog->title ?? 'Untitled Blog' }}
                                                                            </a>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div class="col-12 text-center">
                                                                <p class="text-white">No blogs published yet.</p>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>


                     <div class="tp-testimonial-area pt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="tp-testimonial-slider-wrapper">
                    <div class="tp-testimonial-arrow-box d-none d-lg-block">
                        <button class="tp-testimonial-prev"><i class="fa fa-chevron-left"></i></button>
                        <button class="tp-testimonial-next"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="swiper-container tp-testimonial-slider-active">
                        <div class="swiper-wrapper">
                            <!-- Each testimonial slide -->
                            <div class="swiper-slide">
                                <div class="tp-testimonial-item text-center">
                                    <p>"WB-DigiTech has made everything much easier for me and helped me establish my business quickly at customer-friendly rates.”</p>
                                    <span><em>Hafeez Ullah</em></span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tp-testimonial-item text-center">
                                    <p>"WB-DIGITECH has made everything much easier for me and helped me"</p>
                                    <span><em>Faisal Zakria</em></span>
                                </div>
                            </div>
                            <!-- Add more slides like above -->
                        </div>
                        <!-- Optional: Add pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                          
                        <div class="tp-team-area pt-20 pb-50 fix">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="tp-team-slider-wrapper">
                                            <div class="swiper-container tp-team-slider-active">
                                                <div class="swiper-wrapper">
                                                     @foreach($teamMembers as $member)
                                                    <div class="swiper-slide">
                                                        <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                          <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->speciality }}">
                                                            <div class="tp-team-content"><span>{{ $member->speciality }}</span>
                                                                <h4 class="tp-team-title-sm"><a>{{ $member->name }}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
