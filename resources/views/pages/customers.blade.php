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
                                                <h1 class="tp-hero-title pt-50" style="color:#0A3D62">Clients Who Hire Us
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="tp-hero-content text-center mb-100">
                                            <p>WB-DigiTech helped clients in various industries generate millions in revenue
                                                and inquiries.</p>
                                            <button class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free
                                                Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Clients Section -->
                        <div class="client-section mt-5 bd-brand-area">
                            <div class="container mt-sm-n5 px-2 px-sm-3">
                                <div class="row g-2 g-sm-3 g-md-4">
                                    @foreach($customers as $customer)
                                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 p-sm-2">
                                            <div class="bd-brand-item mb-2 mb-md-3 rounded d-flex justify-content-center align-items-center"
                                                style="height: 100px; border: 1px solid #eee; background: #fff; padding: 8px;">
                                                <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->name }}"
                                                    style="max-width: 100%; max-height: 100%; width: auto; height: auto; object-fit: contain;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action - Fixed for Mobile -->
                        <div class="sv-big-text-area py-5" style="background: #f8f9fa;">
                            <div class="container px-3">
                                <div
                                    class="sv-small-text-box d-flex flex-column flex-sm-row justify-content-between align-items-center text-center mb-3">
                                    <span class="text-muted small mb-2 mb-sm-0">DIGITAL MARKETING AGENCY</span>
                                    <span class="text-muted small">WB-DigiTech</span>
                                </div>
                                <div class="sv-big-text-box text-center">
                                    <h4 class="mb-0">
                                        <a href="{{ route('contact') }}" class="text-decoration-none d-inline-block"
                                            style="color: #2c7db8; font-size: clamp(24px, 8vw, 48px); font-weight: 700; border: 2px solid #2c7db8; padding: 10px 25px; border-radius: 50px; background: white;">
                                            Get in Touch →
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Mobile-specific styles for CTA section */
        @media (max-width: 576px) {
            .sv-big-text-area {
                padding: 2rem 1rem !important;
                background: linear-gradient(to right, #f8f9fa, #ffffff);
                border-radius: 20px 20px 0 0;
                margin-top: 2rem;
            }

            .sv-big-text {
                font-size: 2rem !important;
                line-height: 1.2;
            }

            .sv-big-text a {
                display: inline-block;
                padding: 0.5rem 1rem;
                background-color: #2c7db8;
                color: white !important;
                border-radius: 50px;
                font-size: 1.5rem;
                box-shadow: 0 4px 15px rgba(44, 125, 184, 0.3);
                transition: all 0.3s ease;
            }

            .sv-big-text a:hover {
                background-color: #1a4d6e;
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(44, 125, 184, 0.4);
            }

            .sv-big-text a i {
                transition: transform 0.3s ease;
            }

            .sv-big-text a:hover i {
                transform: translateX(5px);
            }

            .sv-small-text-box span {
                font-size: 0.8rem;
                letter-spacing: 1px;
                color: #6c757d;
            }

            .sv-big-text-box p {
                font-size: 0.9rem;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* Tablet and up */
        @media (min-width: 577px) {
            .sv-big-text a {
                color: #2c7db8 !important;
                text-decoration: none;
                position: relative;
                padding-bottom: 5px;
            }

            .sv-big-text a:after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: #2c7db8;
                transition: width 0.3s ease;
            }

            .sv-big-text a:hover:after {
                width: 100%;
            }

            .sv-big-text a i {
                opacity: 0;
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

            .sv-big-text a:hover i {
                opacity: 1;
                transform: translateX(5px);
            }
        }

        /* Ensure Font Awesome is included */
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    </style>
@endpush