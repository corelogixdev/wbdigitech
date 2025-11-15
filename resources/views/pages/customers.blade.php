@extends('layouts.homelayout')

@section('title', 'Clients - WB-DIGITECH')

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <div id="main-content">
                <div class="ck-content">

                    <!-- Hero Section -->
                    <div class="tp-hero-area tp-hero-ptb main-slider">
                        <div class="container-fluid home-main-slider">
                            <div class="row justify-content-center">
                                <div class="col-xxl-12">
                                    <div class="tp-hero-title-wrap mb-35 p-relative">
                                        <div class="tp-hero-title-box text-center">
                                            <h1 class="tp-hero-title pt-50" style="color:#0A3D62">Clients Who Hire Us</h1>
                                        </div>
                                    </div>
                                    <div class="tp-hero-content text-center mb-100">
                                        <p>WB-DigiTech helped clients in various industries generate millions in revenue and inquiries.</p>
                                        <button class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clients Section -->
<div class="client-section mt-5 bd-brand-area">
    <div class="container mt-sm-n5">
        <div class="row gx-80 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
            @foreach($customers as $customer)
            <div class="col-lg-3 col-6 p-2">
                <div class="bd-brand-item mb-80 rounded d-flex justify-content-center align-items-center"
                     style="height: 120px; border: 1px solid #eee; background: #fff; padding: 10px;">
                    <img src="{{ asset('storage/' . $customer->logo) }}"
                         alt="{{ $customer->name }}"
                         style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

                    <!-- Call to Action -->
                    <div class="sv-big-text-area pb-80 pt-80">
                        <div class="container container-1530">
                            <div class="sv-small-text-box d-flex justify-content-between">
                                <span>DIGITAL MARKETING AGENCY</span><span>WB-DigiTech</span>
                            </div>
                            <div class="sv-big-text-box">
                                <h4 class="sv-big-text tp-char-animation"><a href="/contact-us" style="color:#2c7db8">Get in Touch</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
