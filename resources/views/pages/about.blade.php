@extends('layouts.homelayout')

@section('title', 'About Page')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div id="main-content">
                    <div class="ck-content">
                        <div class="tp-hero-area tp-hero-ptb main-slider">
                            <div class="container-fluid home-main-slider">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-12">
                                        <div class="tp-hero-title-wrap mb-35 p-relative">
                                            <div class="tp-hero-shape-1 d-none"><img src=new-assets/img/home-01/hero/hero-bg-shape-1-1.svg alt="Background banner"></div>
                                            <div class="tp-hero-title-box text-center">
                                                <h1 class="tp-hero-title pt-50"> About Us </h1>
                                            </div>
                                        </div>
                                        <div class="tp-hero-content">
                                            <p></p>
                                        </div>
                                        <div class="text-center mb-100"><button class="tp-btn-white-lg bg-dark text-white open-popup">Get a Free Quote</button></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="raw-html-embed">
                            <div class="ab-inner-hero-area ab-inner-hero-bg p-relative about-us-banner">
                                <div class="breadcurmb-site d-none">
                                    <h6>About Us</h6>
                                </div>
                                <div class="ab-inner-hero-scroll smooth"><a href="#about-info"><span> Scroll to explore </span></a></div>
                                <div class="container container-1480">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="ab-inner-hero-title-box"><span class="ab-inner-hero-subtitle">Digital <br> creative agency</span>
                                                <h2 class="ab-inner-hero-title tp-char-animation">Building Digital Presence</h2>
                                                <p>Digital experiences with maximum emotional impact</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-xl-5 col-lg-8">
                                            <div class="ab-inner-hero-content">
                                                <p> Develops, designs &amp; delivers websites &amp; creative campaigns that drive results. </p><a class="tp-btn-white-sm border-style d-none" href="#">Our Story</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-about-area ab-about-mt pb-90 z-index-5">
                                <div class="container container-1480">
                                    <div class="ab-about-thumb-wrap mb-180">
                                        <div class="row align-items-end">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="ab-about-left-thumb"><img src="{{ asset('new-assets/img/inner-about/about/about-1.jpg')}}" alt="About"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="ab-about-right-thumb p-relative"><img class="inner-img z-index-5" src="{{ asset('new-assets/img/inner-about/about/about-3.jpg')}}" alt="About Us"><img src="{{ asset('new-assets/img/inner-about/about/about-2.jpg')}}"
                                                        alt="About Volga Tigris"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="about-info" class="row">
                                        <div class="col-xxl-9">
                                            <div class="ab-about-content p-relative"><span> Hi! </span>
                                                <p class="tp-dropcap tp_fade_bottom"> We are a creative digital marketing agency that specializes in providing high-quality design and branding solutions to businesses and individuals. Our team is composed of talented designers, developers,
                                                    SEO specialist teams, Google Ads &amp; social media experts, content writers, &amp; marketers.! </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-xl-4col-lg-5 col-md-4 mb-40">
                                                    <div class="ab-about-category-title-box p-relative">
                                                        <h4 class="ab-about-category-title">Something <br><span>WHAT I DO</span></h4><img class="ab-about-shape-1 d-none d-md-block" src="{{ asset('new-assets/img/inner-about/about/shape-1.png')}}" alt="arrow"></div>
                                                </div>
                                                <div class="col-xl-7 col-lg-8 col-md-8">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-5 col-md-6 mb-40">
                                                            <div class="ab-about-category-list category-space-1 tp_fade_bottom">
                                                                <ul>
                                                                    <li>SEO</li>
                                                                    <li>Web Development</li>
                                                                    <li>Google Ads</li>
                                                                    <li>Social Media Marketing</li>
                                                                    <li>Data Entry</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-7 col-md-6 mb-40">
                                                            <div class="ab-about-category-list category-space-2 tp_fade_bottom">
                                                                <ul>
                                                                    <li>Tele Marketing </li>
                                                                    <li>Customer Satisfaction Survey</li>
                                                                    <li>Data Cleansing</li>
                                                                    <li>Call Center </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-team-area pt-20 pb-120 fix">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="tp-team-slider-wrapper">
                                                <div class="swiper-container tp-team-slider-active">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=css/new-assets/img/home-01/team/accountant.jpg alt="accountant"></div>
                                                                <div class="tp-team-content"><span>Accountant</span>
                                                                    <h4 class="tp-team-title-sm"><a>Rohan Sharma</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=css/new-assets/img/home-01/team/client-co-ordinator.jpg alt="client-co-ordinator"></div>
                                                                <div class="tp-team-content"><span>Client Co-Ordinator</span>
                                                                    <h4 class="tp-team-title-sm"><a>Siddharth Menon</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/data-analyst-2.jpg alt="data-analyst"></div>
                                                                <div class="tp-team-content"><span>Data Analyst</span>
                                                                    <h4 class="tp-team-title-sm"><a>Zara Morgan</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/data-analyst.jpg alt="data-analyst"></div>
                                                                <div class="tp-team-content"><span>Data Analyst</span>
                                                                    <h4 class="tp-team-title-sm"><a>Andrew James</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/google-ad-manager.jpg alt="google-ad-manager"></div>
                                                                <div class="tp-team-content"><span>Google Ad Manager</span>
                                                                    <h4 class="tp-team-title-sm"><a>Jasmine Taylor</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/graphic-and-art-designer.jpg alt="graphic-and-art-designer"></div>
                                                                <div class="tp-team-content"><span>Graphic &amp; Art Designer</span>
                                                                    <h4 class="tp-team-title-sm"><a>Micheal Anderson </a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/graphic-and-art-designer1.jpg alt="graphic-and-art-designer"></div>
                                                                <div class="tp-team-content"><span>Graphic &amp; Art Designer</span>
                                                                    <h4 class="tp-team-title-sm"><a> Aditi Sharma</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/seo-specialist-2.jpg alt="seo-specialist"></div>
                                                                <div class="tp-team-content"><span>SEO specialist</span>
                                                                    <h4 class="tp-team-title-sm"><a>Gabriel Adams</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/seo-specialist.jpg alt="seo-specialist"></div>
                                                                <div class="tp-team-content"><span>SEO specialist</span>
                                                                    <h4 class="tp-team-title-sm"><a>James Walker</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/social-media-specialist.jpg alt="social-media-specialist"></div>
                                                                <div class="tp-team-content"><span>Social Media Specialist</span>
                                                                    <h4 class="tp-team-title-sm"><a>Neha Singh</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/ui-ux-designer.jpg alt="ui-ux-designer"></div>
                                                                <div class="tp-team-content"><span>UI/UX Designer</span>
                                                                    <h4 class="tp-team-title-sm"><a>Arjun Patel</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/video-photo-visulyser.jpg alt="video-photo-visulyser"></div>
                                                                <div class="tp-team-content"><span>Video Photo Visulyser</span>
                                                                    <h4 class="tp-team-title-sm"><a>Nia Alexandra</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                                                <div class="tp-hover-btn-item"><img src=new-assets/img/home-01/team/web-developer.jpg alt="web-developer"></div>
                                                                <div class="tp-team-content"><span>Web Developer</span>
                                                                    <h4 class="tp-team-title-sm"><a>Naomi Collins</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-funfact-area pb-40">
                                <div class="container container-1480">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="ab-funfact-title-box"><span class="ab-inner-subtitle mb-25"> Our Facts </span>
                                                <h4 class="ab-inner-funfact-title tp_title_anim">Agency <br> Snapshots</h4>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="ab-funfact-wrap">
                                                <div class="row gx-75">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">500</i>+</span>
                                                            <p>PROJECTS COMPLETED</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">7</i>+</span>
                                                            <p>YEARS OF EXPERIENCE</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">21</i>+</span>
                                                            <p>TEAM MEMBERS</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="ab-funfact-item mb-90"><span><i class="purecounters">100</i>%</span>
                                                            <p>GROWING AGENCY</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    
@endsection