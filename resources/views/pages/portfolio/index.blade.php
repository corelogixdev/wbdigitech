@extends('layouts.homelayout')

@section('title', 'Our Portfolio — Digital Success Stories | WB-Digitech')

@section('meta_description', 'See what WB-Digitech has done for our brand clients with our real results. We have a portfolio of sites, campaigns, SEO successes, design projects, and digital art.')

@section('content')

<style>
    /* Portfolio Hero Section */
    .wb-portfolio-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/wb_imgs/Portfolio.jpg') }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px;
        color: #fff;
    }
    
    .wb-portfolio-cards-wrap {
        margin-top: -100px; 
        position: relative;
        z-index: 10;
        padding-bottom: 80px;
    }

    /* Elevated Portfolio Card */
    .wb-portfolio-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .wb-portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    }

    .wb-portfolio-thumb {
        width: 100%;
        height: 260px;
        position: relative;
        overflow: hidden;
        background: #f5f5f5;
    }

    .wb-portfolio-thumb img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s ease;
    }

    .wb-portfolio-card:hover .wb-portfolio-thumb img {
        transform: scale(1.05);
    }

    /* Hover Overlay */
    .wb-portfolio-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(10, 61, 98, 0.7) 0%, rgba(0, 119, 182, 0.7) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 5;
    }

    .wb-portfolio-card:hover .wb-portfolio-overlay {
        opacity: 1;
    }

    .wb-portfolio-overlay .btn {
        background: #fff;
        color: #0A3D62;
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .wb-portfolio-overlay .btn:hover {
        background: #00B4D8;
        color: #fff;
    }

    /* Content Area */
    .wb-portfolio-content {
        padding: 20px;
        text-align: center;
    }

    .wb-portfolio-category {
        font-size: 12px;
        font-weight: 700;
        color: #CC7A00;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: block;
        text-decoration: none;
    }

    .wb-portfolio-title {
        color: #0A3D62;
        font-weight: 700;
        font-size: 18px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .wb-portfolio-title:hover {
        color: #00B4D8;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-portfolio-hero text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Our Work</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                Our Digital Success Stories
                            </h1>
                            <p style="color: #e2e8f0; font-size: 18px; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                                Discover how we've helped brands grow with custom digital solutions, from web design to SEO campaigns.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Grid Section -->
            <section class="wb-portfolio-cards-wrap bg-light">
                <div class="container container-1500">
                    <div class="row g-4">
                        @forelse($portfolios as $portfolio)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="wb-portfolio-card">
                                    <div class="wb-portfolio-thumb">
                                        <a href="{{ route('portfolio.public.show', ['title' => Str::slug($portfolio->title), 'id' => $portfolio->id]) }}">
                                            @if($portfolio->thumbnail)
                                                <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->title }}">
                                            @else
                                                <img src="{{ asset('new-assets/img/placeholder.jpg') }}" alt="Portfolio">
                                            @endif
                                        </a>
                                        <!-- Overlay -->
                                        <div class="wb-portfolio-overlay">
                                            <a href="{{ route('contact') }}" class="btn">Get In Touch</a>
                                        </div>
                                    </div>
                                    <div class="wb-portfolio-content">
                                        <a href="{{ route('portfolio.public.show', ['title' => Str::slug($portfolio->title), 'id' => $portfolio->id]) }}" class="wb-portfolio-category">
                                            View Case Study
                                        </a>
                                        <h4 class="m-0">
                                            <a class="wb-portfolio-title" href="{{ route('portfolio.public.show', ['title' => Str::slug($portfolio->title), 'id' => $portfolio->id]) }}">
                                                {{ $portfolio->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <h3 class="text-muted" style="font-weight: 600; color: #718096;">No portfolio projects available right now.</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection