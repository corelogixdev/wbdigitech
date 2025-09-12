@extends('layouts.homelayout')

@section('title', 'Services - WB-DIGITECH')

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
                                    <img data-speed=".8" src="{{ asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg') }}" alt="">
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">Our Professional Services</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="blog-details-realated-area pt-100 pb-70 bg-light">
                <div class="container container-1500">
                    <div class="row">
                        @forelse($services as $service)
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                                <div class="tp-blog-item">
                                    <div class="tp-blog-thumb fix p-relative rounded">
                                        @if($service->image && file_exists(public_path('storage/'.$service->image)))
                                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid">
                                        @else
                                            <img src="{{ asset('images/default-service.png') }}" alt="Default Service Image" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="tp-blog-content text-center mt-3">
                                        <h4 class="tp-blog-title-sm mt-2">{{ $service->title }}</h4>
                                        <p class="text-muted mt-1">{{ Str::limit(strip_tags($service->short_description), 100) }}</p>
                                        <a href="{{ route('services.public.show',[$service->slug])}}" class="btn btn-sm btn-primary mt-2">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">No services available right now.</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="col-12">
                        <div class="basic-pagination mt-40 text-center">
                            {{ $services->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </section>
        </main>
    {{-- </div>
</div> --}}
@endsection
