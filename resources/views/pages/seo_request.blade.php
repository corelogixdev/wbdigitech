@extends('layouts.homelayout')

@section('title', 'Seo Audit & Reporting - WB-DIGITECH')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Banner Section -->
                <section class="section-box">
                    <div class="banner-hero ">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tp-blog-standard-thumb-box p-relative">
                                        <img data-speed=".8" src="{{ asset('css/new-assets/wb_imgs/GetFreeSeoAudit.jpg') }}"
                                            alt="SEO Audit Banner">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SEO Form Section -->
                <div class="tp-blog-standard-area pt-0 pb-70">
                    <div class="container container-1200">
                        @if(session('success'))
                            <div class="alert alert-success text-center">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('seo-requests.store') }}" method="POST" class="card shadow-sm p-4">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label">Website URL</label>
                                    <input type="url" name="website_url" class="form-control"
                                        placeholder="https://example.com" required>
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
                                <button type="submit" class="btn px-5" style="color: #fff;
                                    background: linear-gradient(90deg, #0A3D62 0%, #0077B6 100%);">Check</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
@endsection