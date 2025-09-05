@extends('layouts.homelayout')

@section('title', 'WB-DigiTech | ' . $portfolio->title)

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- 🔹 Header with static image + title -->
            <section class="section-box">
                <div class="banner-hero bg-gray-100">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-blog-standard-thumb-box p-relative">
                                    <img src="{{ asset('storage/'.$portfolio->thumbnail) }}" 
                                         alt="{{ $portfolio->title }}" class="img-fluid rounded">
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">
                                            {{ $portfolio->title }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 🔹 Client Overview -->
            <section class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h3 class="fw-bold text-gradient">Client Overview</h3>
                        </div>
                        <div class="col-md-8">
                            <p class="text-muted fs-5">{{ $portfolio->client_overview ?? 'No overview provided.' }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 🔹 Services -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <!-- Left Services -->
                        <div class="col-lg-4 mb-3">
                            <h3 class="fw-bold text-gradient mb-4">Services</h3>
                            <div class="nav flex-column nav-pills me-3" id="services-tab" role="tablist">
                                @foreach($portfolio->services ?? [] as $index => $service)
                                    <button class="nav-link shadow-sm mb-2 {{ $loop->first ? 'active' : '' }}" 
                                            id="service-{{ $index }}-tab" 
                                            data-bs-toggle="pill" 
                                            data-bs-target="#service-{{ $index }}" 
                                            type="button" role="tab">
                                        {{ $service['name'] }}
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Services -->
                        <div class="col-lg-8">
                            <div class="tab-content bg-white p-4 shadow rounded" id="services-tabContent">
                                @foreach($portfolio->services ?? [] as $index => $service)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" 
                                         id="service-{{ $index }}" role="tabpanel">
                                        <h4 class="fw-bold">{{ $service['name'] }}</h4>
                                        <p class="text-muted">{{ $service['description'] ?? 'No description available.' }}</p>
                                        <a href="{{ route('contact') }}" class="btn btn-gradient mt-3">Get In Touch</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 🔹 Work / Images Carousel -->
            @if($portfolio->images)
            <section class="py-5">
                <div class="container text-center">
                    <h3 class="fw-bold text-gradient mb-4">Our Work</h3>
                    <div id="portfolioCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width:70%;">
                        <div class="carousel-inner">
                            @foreach($portfolio->images as $idx => $img)
                                <div class="carousel-item {{ $idx == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/'.$img) }}" 
                                         class="d-block w-100 rounded shadow-sm" 
                                         style="max-height:400px; object-fit:cover;" alt="Work Image">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </section>
            @endif
        </main>

<!-- 🔹 Custom CSS -->
<style>
    .text-gradient {
        background: linear-gradient(45deg, #007bff, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .btn-gradient {
        background: linear-gradient(45deg, #007bff, #6610f2);
        color: white;
        border: none;
    }
    .btn-gradient:hover {
        opacity: 0.9;
    }
</style>

<!-- 🔹 Auto-switch services tabs -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let tabs = document.querySelectorAll('#services-tab button');
        let currentIndex = 0;
        setInterval(() => {
            if (tabs.length === 0) return;
            tabs[currentIndex].classList.remove('active');
            let currentPane = document.querySelector(tabs[currentIndex].dataset.bsTarget);
            currentPane.classList.remove('show', 'active');

            currentIndex = (currentIndex + 1) % tabs.length;

            tabs[currentIndex].classList.add('active');
            let nextPane = document.querySelector(tabs[currentIndex].dataset.bsTarget);
            nextPane.classList.add('show', 'active');
        }, 5000); // auto change every 5s
    });
</script>
@endsection
