@props(['title', 'description', 'serviceCategory', 'serviceName', 'features' => null, 'image' => null])

@php
    $bgStyle = $image 
        ? "background-image: url('" . asset($image) . "'); background-size: cover; background-position: center; background-attachment: fixed;"
        : "background-image: url('" . asset('css/new-assets/services_home/main.webp') . "'); background-size: cover; background-position: center; background-attachment: fixed;";
@endphp

<div class="modern-glow-hero" style="{{ $bgStyle }}">
    <div class="glow-overlay"></div>
    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>
    <div class="glow-orb orb-3"></div>

    <div class="container hero-container position-relative z-index-2" style="padding-top: 80px; padding-bottom: 80px;">
        <div class="row align-items-center">
            
            <!-- Left Side: Service Details -->
            <div class="col-lg-6 mb-5 mb-lg-0 pr-lg-5 animate__animated animate__fadeInLeft text-start">
                
                <h1 class="glow-title" style="text-align: left; font-size: 3.5rem;">
                    {{ $title }}
                </h1>
                
                <p class="hero-subtitle mb-5 text-start" style="font-size: 1.15rem; line-height: 1.7; color: #e2e8f0; max-width: 100%;">
                    {{ $description }}
                </p>
                
                @if($features)
                    <div class="hero-features text-start" style="color: #e2e8f0; opacity: 0.9;">
                        <ul class="list-unstyled mb-0">
                            {{ $features }}
                        </ul>
                    </div>
                @endif
            </div>

            <!-- Right Side: Contact Form (Get Quote) -->
            <div class="col-lg-5 offset-lg-1 animate__animated animate__fadeInRight animate__delay-1s">
                <div class="card border-0 shadow-lg" style="border-radius: 12px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.5) !important;">
                    <div class="card-body p-4 p-md-5">
                        <div class="mb-4 text-center">
                            <h3 class="fw-bold mb-2" style="color: #0A3D62;">Get a Free Quote</h3>
                            <p class="small" style="color: #4a5568;">Fill out the form below and our experts will contact you shortly.</p>
                        </div>
                        
                        <form method="POST" action="{{ route('contact.send') }}" class="contact-form hero-dark-form">
                            @csrf

                            @if(session('success'))
                                <div class="alert alert-success text-center mb-4" style="border-radius: 8px; font-weight: 500; background: rgba(25, 135, 84, 0.2); color: #fff; border: 1px solid rgba(25, 135, 84, 0.5);">
                                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                                </div>
                            @endif
                            
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control form-control-lg bg-light text-dark custom-input" placeholder="Your Name" required>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control form-control-lg bg-light text-dark custom-input" placeholder="Email Address" required>
                                </div>
                                
                                <!-- Phone -->
                                <div class="col-12">
                                    <div style="width: 100%;">
                                        <input type="tel" name="phone" class="form-control form-control-lg bg-light text-dark custom-input phone-input-flag" placeholder="Phone Number" required style="width: 100%;">
                                    </div>
                                </div>
                                
                                <!-- Service Pre-Selected -->
                                <div class="col-12">
                                    <select name="service" class="form-select form-select-lg bg-light text-dark custom-input" required style="pointer-events: none; opacity: 0.9;">
                                        <option value="{{ $serviceName ?? 'General Inquiry' }}" selected>{{ $serviceName ?? 'General Inquiry' }}</option>
                                    </select>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-lg w-100 text-white fw-bold shadow-sm" style="background: linear-gradient(90deg, #0A3D62 0%, #0077B6 100%); border-radius: 6px; padding: 14px; font-size: 16px;">
                                        Get Your Quote <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<style>
    .animate__delay-1s {
        animation-delay: 0.3s;
    }
    .hero-dark-form .custom-input {
        border: 1px solid rgba(10, 61, 98, 0.1) !important;
        border-radius: 6px !important;
        font-size: 15px;
        padding: 12px 15px;
        min-height: 50px;
    }
    .hero-dark-form .custom-input:focus {
        box-shadow: 0 0 0 0.25rem rgba(10, 61, 98, 0.25);
        border-color: rgba(10, 61, 98, 0.4) !important;
        background-color: #ffffff !important;
    }
    .hero-dark-form .custom-input::placeholder {
        color: rgba(74, 85, 104, 0.7);
    }
</style>
