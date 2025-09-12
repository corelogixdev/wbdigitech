@extends('layouts.homelayout')

@section('title', $service->title . ' - WB-DIGITECH')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Banner Section -->
            <section class="section-box">
                <div class="banner-hero bg-gray-100">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-blog-standard-thumb-box p-relative">
                                    @if($service->image && file_exists(public_path('storage/'.$service->image)))
                                        <img data-speed=".8" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
                                    @else
                                        <img data-speed=".8" src="{{ asset('images/default-service.png') }}" alt="Default Service">
                                    @endif
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">{{ $service->title }}</h1>
                                        <p class="text-white mt-2">{{ $service->short_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service Content Section -->
            <section class="blog-details-realated-area pt-100 pb-70 bg-light">
                <div class="container container-1000">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="service-content bg-white p-5 rounded shadow">
                                
                                <!-- Example structured layout -->
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-6">
                                        <h2 class="fw-bold text-dark">Overview</h2>
                                        <p>{!! nl2br(e($service->short_description)) !!}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('storage/' . $service->image) }}" 
                                             alt="{{ $service->title }}" 
                                             class="img-fluid rounded shadow-sm">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    {!! $service->content !!}
                                </div>

                                <!-- Call to Action -->
                                <div class="text-center mt-5">
                                    <a href="{{ route('contact') }}" class="theme-btn">
                                        <i class="bi bi-envelope"></i> Get This Service
                                    </a>
                                </div>
                            </div>

                            <!-- Share Section -->
                            <div class="mt-5 text-center">
                                <h5 class="fw-bold text-dark">Share This Service</h5>
                                <div class="d-flex justify-content-center gap-3 mt-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" 
                                       target="_blank" class="btn btn-sm theme-btn">
                                        <i class="bi bi-facebook"></i> Facebook
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($service->title) }}" 
                                       target="_blank" class="btn btn-sm theme-btn">
                                        <i class="bi bi-twitter"></i> Twitter
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::fullUrl()) }}" 
                                       target="_blank" class="btn btn-sm theme-btn">
                                        <i class="bi bi-linkedin"></i> LinkedIn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Services Section -->
                    <div class="row mt-5">
                        <div class="col-12 text-center mb-4">
                            <h3 class="fw-bold text-dark">Other Services</h3>
                            <p class="text-muted">Explore more from WB-DIGITECH</p>
                        </div>
                        @foreach($relatedServices as $related)
                            @if($related->id !== $service->id)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="tp-blog-item h-100">
                                    <div class="tp-blog-thumb fix p-relative rounded">
                                        <a href="{{ route('services.public.show', $related->slug) }}">
                                            @if($related->image && file_exists(public_path('storage/'.$related->image)))
                                                <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="img-fluid">
                                            @else
                                                <img src="{{ asset('images/default-service.png') }}" alt="Default Service" class="img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="tp-blog-content text-center mt-3">
                                        <h5 class="tp-blog-title-sm mt-2">
                                            <a class="text-dark" href="{{ route('services.public.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h5>
                                        <p class="text-muted">{{ Str::limit($related->short_description, 80) }}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

<style>
.service-content {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #444;
}
.service-content h2, 
.service-content h3 {
    color: #0A3D62;
    margin-top: 20px;
    margin-bottom: 15px;
    font-weight: bold;
}
.service-content p {
    margin-bottom: 15px;
}
.tp-blog-item {
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}
.tp-blog-item:hover {
    transform: translateY(-5px);
}
.tp-blog-thumb img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}
/* Theme Button */
.theme-btn {
    background-color: #0077B6;
    color: #fff !important;
    font-weight: 600;
    padding: 8px 18px;
    border-radius: 6px;
    transition: background 0.3s ease, transform 0.2s ease;
    text-decoration: none;
    display: inline-block;
}
.theme-btn:hover {
    background-color: #0A3D62;
    transform: translateY(-2px);
    color: #fff !important;
}
</style>
@endsection
