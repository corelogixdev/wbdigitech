@extends('layouts.homelayout')

@section('title', 'About Us - WB-DIGITECH')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            {{-- Hero Section --}}
            <section class="tp-hero-area tp-hero-ptb main-slider text-center bg-dark text-white py-120 my-120">
                <div class="container">
                    <h1 class="tp-hero-title text-white fw-bold">About Us</h1>
                    <p class="lead mt-3 text-white">We’re Delivering The Best Customer Experience</p>
                    <p class="w-75 text-white mx-auto">
                        WB-DIGITECH is a creative digital agency that strives to think outside the box and deliver
                        top-quality work to each of our customers. We provide innovative strategies, powerful
                        marketing solutions, and digital experiences that ensure growth and long-term success.
                    </p>
                    <div class="mt-4">
                        <button class="tp-btn-white-lg bg-white text-dark open-popup">Get a Free Quote</button>
                    </div>
                    <br>
                </div>
            </section>
            <div style="height:60px;" aria-hidden="true"></div>

            {{-- About Info Section --}}
            <section id="about-info" class="ab-about-area py-120 my-120">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <img src="{{ asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg') }}" 
                                 alt="About" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bold mb-3">Who We Are</h2>
                            <p>
                                We work hard to provide the latest and best digital marketing techniques to ensure
                                a successful online presence as well as creating strategies that are unique and
                                make sense. Our team can cater to many industries no matter how big or small your
                                business is. 
                            </p>
                            <p>
                                We do not believe in cutting costs or cutting corners; we believe in delivering the
                                best service possible at affordable rates to ensure the success of your online business.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div style="height:60px;" aria-hidden="true"></div>

            {{-- Work Process --}}
            <section class="work-process bg-light py-120 my-150">
                <div class="container text-center">
                    <h2 class="fw-bold mb-5">Our Working Process</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="p-5 bg-white shadow-sm rounded h-100">
                                <i class="fa-solid fa-pencil-ruler fa-3x mb-3 text-primary"></i>
                                <h5 class="fw-semibold">Design</h5>
                                <p class="text-muted">Creative planning & designing with client-first approach.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-5 bg-white shadow-sm rounded h-100">
                                <i class="fa-solid fa-vials fa-3x mb-3 text-success"></i>
                                <h5 class="fw-semibold">Testing</h5>
                                <p class="text-muted">Rigorous testing to ensure high quality and performance.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-5 bg-white shadow-sm rounded h-100">
                                <i class="fa-solid fa-rocket fa-3x mb-3 text-danger"></i>
                                <h5 class="fw-semibold">Go-Live</h5>
                                <p class="text-muted">Seamless launch with continued support after delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div style="height:60px;" aria-hidden="true"></div>

            {{-- Testimonial Section --}}
            <section class="tp-testimonial-area py-120 my-120 bg-dark text-white">
                <div class="container">
                    <br>
                    <h2 class="fw-bold mb-5 text-white text-center">What Our Clients Say</h2>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="tp-testimonial-slider-wrapper">
                                <div class="tp-testimonial-arrow-box d-none d-lg-block">
                                    <button class="tp-testimonial-prev btn btn-outline-light"><i class="fa fa-chevron-left"></i></button>
                                    <button class="tp-testimonial-next btn btn-outline-light"><i class="fa fa-chevron-right"></i></button>
                                </div>
                                <div class="swiper-container tp-testimonial-slider-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tp-testimonial-item text-center">
                                                <p class="mb-3 text-white">"WB-DigiTech has made everything much easier for me and helped me establish my business quickly at customer-friendly rates.”</p>
                                                <span class="fw-semibold text-white"><em>Hafeez Ullah</em></span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-testimonial-item text-center">
                                                <p class="mb-3 text-white">"WB-DIGITECH has made everything much easier for me and helped me"</p>
                                                <span class="fw-semibold text-white"><em>Faisal Zakria</em></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </section>
            <div style="height:60px;" aria-hidden="true"></div>

            {{-- Team Section --}}
            <section class="tp-team-area py-120 my-120 bg-light">
                <div class="container text-center">
                    <h2 class="fw-bold mb-5">Our Motivated Team</h2>
                    <div class="row justify-content-center g-4">
                        @foreach($teamMembers as $member)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-card shadow-sm rounded bg-white p-4 h-100">
                                    <div class="team-img mb-3">
                                        <img src="{{ asset('storage/' . $member->image) }}" 
                                             alt="{{ $member->name }}" 
                                             class="img-fluid rounded-circle" style="width:120px; height:120px; object-fit:cover;">
                                    </div>
                                    <h5 class="mb-1">{{ $member->name }}</h5>
                                    <p class="text-muted small">{{ $member->speciality }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <div style="height:60px;" aria-hidden="true"></div>

            {{-- Fun Facts --}}
            <section class="ab-funfact-area py-120 my-120">
                <div class="container text-center">
                    <h2 class="fw-bold mb-5">Agency Snapshots</h2>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm h-100">
                                <i class="fa-solid fa-briefcase fa-2x text-primary mb-2"></i>
                                <h3 class="fw-bold"><span class="purecounters">500</span>+</h3>
                                <p class="text-muted">Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm h-100">
                                <i class="fa-solid fa-calendar-check fa-2x text-success mb-2"></i>
                                <h3 class="fw-bold"><span class="purecounters">7</span>+</h3>
                                <p class="text-muted">Years of Experience</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm h-100">
                                <i class="fa-solid fa-users fa-2x text-warning mb-2"></i>
                                <h3 class="fw-bold"><span class="purecounters">21</span>+</h3>
                                <p class="text-muted">Team Members</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-4 bg-white rounded shadow-sm h-100">
                                <i class="fa-solid fa-chart-line fa-2x text-danger mb-2"></i>
                                <h3 class="fw-bold">100%</h3>
                                <p class="text-muted">Growing Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection
