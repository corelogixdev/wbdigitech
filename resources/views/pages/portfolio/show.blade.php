@extends('layouts.homelayout')

@section('title',   $portfolio->title . ' - WB-DIGITECH')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- 🔹 Hero Section with Image + Overlay Title -->
            <section class="section-box">
                <div class="banner-hero">
                    <div class="tp-blog-standard-thumb-box">
                        <img src="{{ asset('storage/'.$portfolio->thumbnail) }}" 
                             alt="{{ $portfolio->title }}" class="tp-banner-img">
                        <div class="tp-banner-overlay"></div>
                        <div class="tp-banner-title text-center">
                            <h1 class="tp-blog-standard-title">
                                {{ $portfolio->title }}
                            </h1>
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
   /* Gradient text */
.text-gradient {
    background: linear-gradient(90deg, #0A3D62, #0077B6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Gradient button */
.btn-gradient {
    background: linear-gradient(90deg, #0A3D62, #0077B6);
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 10px 22px;
    transition: all 0.3s ease;
}
.btn-gradient:hover {
    transform: translateY(-2px);
    opacity: 0.9;
}

/* Hero image + overlay */
.tp-blog-standard-thumb-box { 
    position: relative; 
    overflow: hidden;
    border-radius: 12px;
    max-height: 480px;
}
.tp-banner-img {
    width: 100%;
    min-height: 300px;
    max-height: 480px;
    object-fit: cover;
    object-position: center center;
    display:block;
}
.tp-banner-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(10,61,98,0.55) 0%, rgba(0,119,182,0.4) 100%);
    border-radius: 12px;
}
.tp-banner-title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    color: #fff;
}
.tp-blog-standard-title {
    font-size: 2.5rem;
    font-weight: 700;
    text-shadow: 0 3px 8px rgba(0,0,0,0.6);
}

/* 🔹 Services Tabs Buttons */
#services-tab .nav-link {
    background: #f8f9fa;
    color: #0A3D62;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-weight: 500;
    padding: 10px 15px;
    transition: all 0.3s ease;
    text-align: left;
}

#services-tab .nav-link:hover {
    background: linear-gradient(90deg, #0A3D62, #0077B6);
    color: #fff;
    transform: translateX(3px);
}

#services-tab .nav-link.active {
    background: linear-gradient(90deg, #0A3D62, #0077B6);
    color: #fff;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
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
