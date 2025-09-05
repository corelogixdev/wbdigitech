@extends('layouts.homelayout')

@section('title', 'WB-DigiTech | Portfolio')

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
                                    <img data-speed=".8" src="{{asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg')}}" alt="Portfolio Banner">
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">
                                            Our Portfolio <br> Showcasing Creativity & Strategy
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Grid Section -->
            <section class="tp-blog-standard-area pt-100 pb-70">
                <div class="container container-1500">
                    <div class="row">
                        @forelse($portfolios as $portfolio)
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                                <div class="tp-blog-item position-relative overflow-hidden">
                                    <div class="tp-blog-thumb fix p-relative">
                                        <a href="{{ route('portfolio.public.show', $portfolio->id) }}">
                                            @if($portfolio->thumbnail)
                                                <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" 
                                                     alt="{{ $portfolio->title }}" class="img-fluid w-100">
                                            @else
                                                <img src="{{ asset('new-assets/img/placeholder.jpg') }}" alt="Portfolio">
                                            @endif
                                        </a>
                                        <!-- Overlay Get in Touch -->
                                        <div class="portfolio-overlay d-flex flex-column justify-content-center align-items-center">
                                            <h5 class="text-white">{{ $portfolio->title }}</h5>
                                            <a href="{{ route('contact') }}" class="btn btn-light btn-sm mt-2">Get In Touch</a>
                                        </div>
                                    </div>
                                    <div class="tp-blog-content">
                                        <span><a href="#">Portfolio</a></span>
                                        <h4 class="tp-blog-title-sm">
                                            <a class="text-heading-4" href="{{ route('portfolio.public.show', $portfolio->id) }}">
                                                {{ $portfolio->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No portfolio projects available.</p>
                        @endforelse
                    </div>
                </div>
            </section>
        </main>
    {{-- </div>
</div> --}}

<style>
.portfolio-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55);
    opacity: 0;
    transition: opacity .3s ease;
}
.tp-blog-item:hover .portfolio-overlay {
    opacity: 1;
}
</style>

@endsection
