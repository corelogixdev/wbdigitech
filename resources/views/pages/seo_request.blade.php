@extends('layouts.homelayout')

@section('title', 'Seo Audit & Reporting - WB-DIGITECH')

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
                                    <img data-speed=".8" src="{{ asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg') }}" alt="SEO Audit Banner">
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">
                                            Best Tool for <br> SEO Audit & Reporting
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SEO Form Section -->
            <div class="tp-blog-standard-area pt-100 pb-70">
                <div class="container container-1200">
                    @if(session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('seo-requests.store') }}" method="POST" class="card shadow-sm p-4">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label">Website URL</label>
                                <input type="url" name="website_url" class="form-control" placeholder="https://example.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5">Check</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
@endsection
