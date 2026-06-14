@extends('layouts.homelayout')

@section('title', 'Seo Audit & Reporting - WB-DIGITECH')

@section('content')
<style>
    /* Shared Form Page Custom Styles */
    .wb-page-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/wb_imgs/GetFreeSeoAudit.jpg') }}');
        background-size: cover;
        background-position: center;
        padding: 180px 0 100px;
        color: #fff;
    }
    
    .wb-form-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .wb-form-wrapper {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        height: 100%;
        margin-top: 0;
        position: relative;
        z-index: 10;
    }

    .wb-form-wrapper h2.wb-form-title {
        color: #0A3D62;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .wb-custom-input {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 15px;
        color: #4a5568;
        width: 100%;
        display: block;
        min-height: 50px;
    }
    
    .wb-custom-input:focus {
        background: #fff;
        border-color: #0A3D62;
        box-shadow: 0 0 0 0.2rem rgba(10, 61, 98, 0.1);
        outline: none;
    }
    
    .wb-info-box {
        background: #0A3D62;
        border-radius: 15px;
        padding: 40px;
        color: #fff;
        margin-top: 0;
        position: relative;
        z-index: 10;
        height: 100%;
    }
    
    .wb-info-box h4 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 30px;
        font-size: 24px;
    }
    
    .wb-info-item {
        display: flex;
        margin-bottom: 25px;
    }
    
    .wb-info-icon {
        color: #00B4D8;
        font-size: 24px;
        margin-right: 15px;
        margin-top: 2px;
    }
    
    .wb-info-text h6 {
        color: #fff;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 18px;
    }
    
    .wb-info-text p {
        color: #cbd5e0;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-page-hero text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Free SEO Audit</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                Discover Your Website's True Potential
                            </h1>
                            <p class="mb-5" style="color: #e2e8f0; font-size: 18px; max-width: 600px; line-height: 1.6;">
                                Request a comprehensive SEO audit today and get actionable insights to improve your rankings, drive more traffic, and increase conversions.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Form Section -->
            <section class="wb-form-section">
                <div class="container">
                    <div class="row g-5">
                        
                        <!-- Left: Form -->
                        <div class="col-lg-8">
                            <div class="wb-form-wrapper">
                                <span class="mb-2" style="color: #CC7A00; font-weight: 600; font-size: 13px; letter-spacing: 1px; display: block; text-transform: uppercase;">Get Started</span>
                                <h2 class="wb-form-title">Request Your Free SEO Audit</h2>
                                <p class="text-muted mb-4">Fill out the form below with your website details, and our SEO experts will analyze your site and get back to you with a detailed report.</p>
                                
                                @if(session('success'))
                                    <div class="alert alert-success mb-4" style="background: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 8px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; vertical-align: bottom;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('seo-requests.store') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Website URL -->
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">WEBSITE URL</label>
                                            <input type="url" name="website_url" class="wb-custom-input" placeholder="https://yourwebsite.com" required>
                                        </div>

                                        <!-- First Name -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">FIRST NAME</label>
                                            <input type="text" name="first_name" class="wb-custom-input" placeholder="John" required>
                                        </div>

                                        <!-- Last Name -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">LAST NAME</label>
                                            <input type="text" name="last_name" class="wb-custom-input" placeholder="Doe" required>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">EMAIL ADDRESS</label>
                                            <input type="email" name="email" class="wb-custom-input" placeholder="john@example.com" required>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px; font-weight: 700; color: #718096; margin-bottom: 5px;">PHONE</label>
                                            <div style="width: 100%;">
                                                <input type="tel" name="phone" class="wb-custom-input phone-input-flag" placeholder="Phone number" required style="width: 100%;">
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn w-100 text-white fw-bold py-3" style="background: #0A3D62; border-radius: 8px; border: none; font-size: 16px; cursor: pointer; transition: background 0.3s ease;">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: text-bottom;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                REQUEST FREE AUDIT
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right: Info Box -->
                        <div class="col-lg-4">
                            <div class="wb-info-box">
                                <h4>What's Included?</h4>
                                
                                <div class="wb-info-item">
                                    <div class="wb-info-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                    </div>
                                    <div class="wb-info-text">
                                        <h6>Performance Analysis</h6>
                                        <p>In-depth check of your site speed, mobile responsiveness, and technical health.</p>
                                    </div>
                                </div>
                                
                                <div class="wb-info-item">
                                    <div class="wb-info-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    </div>
                                    <div class="wb-info-text">
                                        <h6>Keyword Rankings</h6>
                                        <p>Discover which keywords you're currently ranking for and new opportunities.</p>
                                    </div>
                                </div>
                                
                                <div class="wb-info-item" style="margin-bottom: 0;">
                                    <div class="wb-info-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v-6M6 20V10M18 20V4"></path></svg>
                                    </div>
                                    <div class="wb-info-text">
                                        <h6>Competitor Insights</h6>
                                        <p>Understand what your competitors are doing right and how to beat them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>
@endsection