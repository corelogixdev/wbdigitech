@extends('layouts.homelayout')

@section('title', 'Contact Us - WB-DIGITECH')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Hero -->
                <div class="tp-hero-area tp-hero-ptb main-slider">
                    <div class="container-fluid home-main-slider">
                        <div class="row justify-content-center">
                            <div class="col-xxl-12 text-center">
                                <div class="tp-hero-title-wrap mb-35">
                                    <h1 class="tp-hero-title pt-50" style="color:#0A3D62">Contact Us</h1>
                                </div>
                                <div class="text-center mb-100">
                                    <button class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Info + Form -->
                <section class="section-box">
                    <div class="container mb-20">
                        <div class="bdrd-58 box-gray-100 icon-wave">
                            <div class="row">
                                <div class="col-lg-12 mb-60">
                                    <span class="text-uppercase">Contact Us</span>
                                    <h2 class="text-heading-3 mt-10">Have a project in mind?</h2>
                                    <p class="text-body-text mt-20">The right move at the right time saves your investment.
                                        Let’s expand your business together.</p>
                                </div>

                                <!-- Contact Info -->
                                <div class="col-lg-4 mb-40">
                                    <h4 class="text-heading-6 mb-10">WB-DigiTech</h4>
                                    <p class="text-body-text">
                                        {{ $contact->location ?? '504 Raffa Building Rolla Street Bur Dubai, UAE' }}
                                    </p>

                                    <p class="text-body-text">
                                        <a href="tel:+97142559928">+971-4-255-9928</a><br>
                                        <a href="tel:+971502390775">+971-50-239-0775</a>
                                    </p>

                                    <p class="text-body-text">
                                        <a href="mailto:info@wbdigitech.ae">info@wbdigitech.ae</a><br>
                                        <a href="mailto:hr@wbdigitech.ae">hr@wbdigitech.ae</a>
                                    </p>
                                </div>

                                <!-- Contact Form -->
                                <div class="col-lg-8">
                                    <form method="POST" action="{{ route('contact.send') }}" class="contact-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter your name" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter your email" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Enter your phone" required>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <textarea name="message" class="form-control" rows="4"
                                                    placeholder="How we can help you?" required></textarea>
                                            </div>
                                            <div class="col-lg-12 mt-15">
                                                <button type="submit" class="btn btn-black">Send Message</button>
                                                <br><span class="text-body-text-md mt-2 d-block">LET’S CREATE SOMETHING
                                                    IMPRESSIVE</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

@endsection