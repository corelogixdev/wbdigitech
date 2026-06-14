@extends('layouts.homelayout')

@php
    use Illuminate\Support\Str;
    $heroImage = !empty($portfolio->thumbnail) ? asset('storage/' . $portfolio->thumbnail) : asset('css/new-assets/wb_imgs/Portfolio.jpg');
@endphp

@section('title', $portfolio->title . ' - WB-DIGITECH')

@section('content')

<style>
    /* Single Portfolio Hero Section */
    .wb-portfolio-single-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.95)), url('{{ $heroImage }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px;
        color: #fff;
    }

    .wb-portfolio-single-wrap {
        margin-top: -100px; 
        position: relative;
        z-index: 10;
        padding-bottom: 80px;
    }

    /* Elevated Content Containers */
    .wb-card-box {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        height: 100%;
    }

    /* Typography inside boxes */
    .wb-box-title {
        color: #0A3D62;
        font-weight: 800;
        margin-bottom: 25px;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
    }
    
    .wb-box-title svg {
        margin-right: 10px;
        color: #CC7A00;
    }

    .wb-rich-text {
        color: #4a5568;
        font-size: 1rem;
        line-height: 1.8;
    }

    /* Gradient Links/Buttons */
    .wb-btn-primary {
        background: #0A3D62;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px 25px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .wb-btn-primary:hover {
        background: #00B4D8;
        color: #fff;
        transform: translateY(-2px);
    }
    
    .wb-btn-outline {
        background: transparent;
        color: #0A3D62;
        border: 2px solid #0A3D62;
        border-radius: 8px;
        padding: 10px 23px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .wb-btn-outline:hover {
        background: #0A3D62;
        color: #fff;
    }

    /* Case Study Left Panel */
    .wb-case-img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 20px;
        border: 1px solid #e2e8f0;
    }

    /* Services Pills */
    .wb-nav-pills .nav-link {
        background: #f8fafc;
        color: #4a5568;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-weight: 600;
        padding: 12px 20px;
        margin-bottom: 10px;
        text-align: left;
        transition: all 0.3s ease;
    }

    .wb-nav-pills .nav-link:hover {
        background: #e2e8f0;
    }

    .wb-nav-pills .nav-link.active {
        background: #0A3D62;
        color: #fff;
        border-color: #0A3D62;
        box-shadow: 0 4px 15px rgba(10, 61, 98, 0.2);
    }
    
    .wb-service-subtitle {
        color: #00B4D8;
        font-weight: 700;
        font-size: 1.1rem;
        margin-top: 25px;
        margin-bottom: 15px;
    }

    /* Fix CKEditor Output */
    .ckeditor-output ul {
        list-style-type: disc !important;
        padding-left: 25px !important;
        margin-bottom: 15px !important;
    }
    
    .ckeditor-output ol {
        list-style-type: decimal !important;
        padding-left: 25px !important;
        margin-bottom: 15px !important;
    }

    /* Carousel */
    .wb-carousel-img {
        border-radius: 15px;
        object-fit: cover;
        max-height: 500px;
        width: 100%;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            
            <!-- Hero Section -->
            <section class="wb-portfolio-single-hero text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 2px; font-size: 14px; display: block;">Case Study</span>
                            <h1 class="fw-bolder" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                {{ $portfolio->title }}
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content Section -->
            <section class="wb-portfolio-single-wrap bg-light">
                <div class="container">
                    
                    <!-- Overview & Case Study Box -->
                    <div class="row g-4 mb-5">
                        <div class="col-lg-4">
                            <div class="wb-card-box">
                                <h3 class="wb-box-title">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    Project Details
                                </h3>
                                
                                @if(!empty($portfolio->thumbnail))
                                    <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->title }}" class="wb-case-img">
                                @endif

                                @if(!empty($portfolio->website_link))
                                    <a href="{{ $portfolio->website_link }}" target="_blank" class="wb-btn-outline w-100 justify-content-center mt-3">
                                        Visit Website
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="wb-card-box">
                                <h3 class="wb-box-title">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                    Client Overview
                                </h3>
                                <div class="wb-rich-text ckeditor-output">
                                    {!! $portfolio->client_overview ?? 'No overview provided.' !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Section -->
                    <div class="row g-4 mb-5">
                        <div class="col-lg-4">
                            <div class="wb-card-box">
                                <h3 class="wb-box-title">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                    Services Rendered
                                </h3>
                                <div class="nav flex-column nav-pills wb-nav-pills" id="services-tab" role="tablist">
                                    @foreach($portfolio->services ?? [] as $index => $service)
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="service-{{ $index }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#service-{{ $index }}" type="button" role="tab">
                                            {{ $service['name'] }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="wb-card-box tab-content" id="services-tabContent">
                                @foreach($portfolio->services ?? [] as $index => $service)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="service-{{ $index }}" role="tabpanel">

                                        <h3 class="wb-box-title" style="color: #00B4D8; margin-bottom: 10px;">{{ $service['name'] }}</h3>

                                        @if(!empty($service['objective']))
                                            <h4 class="wb-service-subtitle">Objective</h4>
                                            <div class="wb-rich-text ckeditor-output">
                                                {!! $service['objective'] !!}
                                            </div>
                                        @endif

                                        @if(!empty($service['challenges']))
                                            <h4 class="wb-service-subtitle">Challenges</h4>
                                            <div class="wb-rich-text ckeditor-output">
                                                {!! $service['challenges'] !!}
                                            </div>
                                        @endif

                                        @if(!empty($service['solutions']))
                                            <h4 class="wb-service-subtitle">Solutions</h4>
                                            <div class="wb-rich-text ckeditor-output">
                                                {!! $service['solutions'] !!}
                                            </div>
                                        @endif

                                        <div class="mt-4">
                                            <a href="{{ route('contact') }}" class="wb-btn-primary">
                                                Discuss Your Project
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ms-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Work Carousel Section -->
                    @if(!empty($portfolio->images) && count($portfolio->images) > 0)
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="wb-card-box">
                                    <h3 class="wb-box-title text-center justify-content-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                        Our Work Gallery
                                    </h3>
                                    
                                    <div id="portfolioCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                                        <div class="carousel-inner" style="border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                            @foreach($portfolio->images as $idx => $img)
                                                <div class="carousel-item {{ $idx == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('storage/' . $img) }}" class="wb-carousel-img" alt="Gallery Image {{ $idx + 1 }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        @if(count($portfolio->images) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev" style="background: rgba(0,0,0,0.2); width: 50px; height: 50px; border-radius: 50%; top: 50%; transform: translateY(-50%); left: 20px;">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next" style="background: rgba(0,0,0,0.2); width: 50px; height: 50px; border-radius: 50%; top: 50%; transform: translateY(-50%); right: 20px;">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </section>

        </main>
    </div>
</div>

<script>
    // Auto-switch services tabs every 6 seconds
    document.addEventListener("DOMContentLoaded", function () {
        let tabs = document.querySelectorAll('#services-tab button');
        if (tabs.length <= 1) return;

        let currentIndex = 0;
        setInterval(() => {
            currentIndex = (currentIndex + 1) % tabs.length;
            let tab = new bootstrap.Tab(tabs[currentIndex]);
            tab.show();
        }, 6000);
    });
</script>

@endsection