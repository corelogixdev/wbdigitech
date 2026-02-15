@extends('layouts.homelayout')

@section('title', 'Careers - WB-DIGITECH')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div id="main-content">
                    <div class="ck-content">

                        <!-- Banner Section -->
                        <section class="section-box">
                            <div class="banner-hero banner-3 page_speed_2015023607">
                                <div class="container">
                                    <div class="text-center">
                                        <h1 class="tp-hero-title pt-50" style="color:#0A3D62">Careers</h1>
                                        <div class="text-body-lead-large color-gray-500 mt-40"></div>
                                        <div class="mt-50 d-none">
                                            <a class="btn btn-black icon-arrow-right-white mb-15" href="/"> Join our team
                                            </a>
                                            <a class="btn btn-default icon-arrow-right color-gray-900 ml-20 btn-mb mb-15"
                                                href="/"> Learn more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Career Notice -->
                        <div class="raw-html-embed">
                            <div class="clr_blkcareer branding_bg py-4">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10 text-center">
                                            <h3 class="career-heading mb-3">
                                                Those Who Are Residing Currently in Dubai, UAE ONLY Need To Apply
                                            </h3>
                                            <p class="text-white fw-bold">
                                                <span class="page_speed_1734958515 blink_me">
                                                    Please send your CV to
                                                    <a href="mailto:info@wbdigitech.com" class="text-warning">
                                                        info@wbdigitech.com
                                                    </a>
                                                    by mentioning your desired position in the subject section.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Careers Accordion with Image + FAQ -->
                        <div class="tp-award-area pt-20 pb-20">
                            <div class="container container-1630">
                                <div class="row">
                                    <!-- Left column (image/illustration) -->
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="tp-award-list-thumb-wrap p-relative">
                                            <div id="tp-award-thumb" class="tp-award-list-thumb-1">
                                                <img class="tp-award-list-thumb-1"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-1.png') }}"
                                                    alt="Award 1">
                                                <img class="tp-award-list-thumb-2"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-2.png') }}"
                                                    alt="Award 2">
                                                <img class="tp-award-list-thumb-3"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-3.png') }}"
                                                    alt="Award 3">
                                                <img class="tp-award-list-thumb-4"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-4.png') }}"
                                                    alt="Award 4">
                                                <img class="tp-award-list-thumb-5"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-5.png') }}"
                                                    alt="Award 5">
                                                <img class="tp-award-list-thumb-6"
                                                    src="{{ asset('css/new-assets/img/home-01/award/award-6.png') }}"
                                                    alt="Award 6">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right column (title + accordion) -->
                                    <div class="col-xl-8 col-lg-8 col-md-12">
                                        <div class="fq-faq-wrapper">
                                            <div class="tp-award-title-box page_speed_1262340070 mb-30">
                                                <h2 class="tp-section-title tp-char-animation">
                                                    Frequently <br><span>Asked Questions</span>
                                                </h2>
                                            </div>

                                            <div class="tp-service-2-accordion-box">
                                                <div class="accordion" id="accordionExample">
                                                    @foreach($careers as $index => $career)
                                                        <div class="accordion-items">
                                                            <h2 class="accordion-header" id="header-{{ $index }}">
                                                                <button class="accordion-buttons collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse-{{ $index }}"
                                                                    aria-expanded="false" aria-controls="collapse-{{ $index }}">
                                                                    {{ $career->title }}
                                                                    <span class="accordion-icon"></span>
                                                                </button>
                                                            </h2>
                                                            <div id="collapse-{{ $index }}" class="accordion-collapse collapse"
                                                                aria-labelledby="header-{{ $index }}"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="p-5">
                                                                        {!! $career->description !!}
                                                                        <br><br>
                                                                        <p><b>Apply Now:</b> Send your CV to
                                                                            <a
                                                                                href="mailto:info@wbdigitech.com">info@wbdigitech.com</a>
                                                                        </p>
                                                                        <p><b>Call & WhatsApp:</b>
                                                                            <a href="tel:+971000000000">+971 00 000 0000</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            {{--
        </div>
    </div> --}}
@endsection