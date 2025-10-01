
<style>

    /* Top bar styling - only affects the top bar */
    .header-top-black { background: #111; color: #fff; }

    /* Top bar styling - gradient based on logo colors */
    .header-top-black {
    /* background: linear-gradient(90deg, #0A3D62 0%, #0077B6 100%); */
    background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%);
    color: #fff;
    }
    .header-top-black a { color: #fff; }
    .header-top-black .small { font-size: 13px; }
    .header-top-black .social-icons a { margin-left: 12px; font-size: 16px; color: #fff; text-decoration: none; }
    .header-top-black .social-icons a:hover { color: #00A8E8; } /* lighter accent blue */




    /* Make sure the main nav/header stays white (not black) */
    .tp-header-area .main-header-wrap { background: #fff; }

    /* Hide Google Translate top banner and default UI - we use custom dropdown */
    .goog-te-banner-frame.skiptranslate { display: none !important; }
    body { top: 0px !important; }
    #google_translate_element { display: none; }
    .goog-te-gadget-icon { display: none !important; }

    /* Small responsive tweaks */
    @media (max-width: 767px) {
    .header-top-black .col-md-6 { text-align: center; }
    .header-top-black .social-icons { margin-top: 6px; }
    }
</style>
<div class="body-overlay"></div> 
<!-- Top Most Header -->
    <div class="floating-icons d-none">
        <div class="float-sm">
            <div class="fl-fl float-wt d-none"><i class="fab fa-whatsapp"></i><a href="https://wa.link/+971-50-239-0775" target="_blank"> Whatsapp</a></div>
            <div class="fl-fl float-mail d-none"><i class="fa fa-envelope"></i><a href="mailto:mail" target="_blank"> E-Mail Us</a></div>
            <div class="fl-fl float-phone"><i class="fa fa-phone"></i><a href="tel:+971-50-239-0775" target="_blank"> Call Us</a></div>
            <div class="fl-fl float-quote "><i class="fa fa-pencil"></i><a href="javascript:;" class="open-popup"> Get a Quote</a></div>
        </div>
    </div>
    <nav class="navbar navbar-mobile fixed-bottom d-none">
        <div class="container-fluid d-flex justify-content-between"><a href="javascript:;" class="nav-link btn btn-quote flex-fill text-center open-popup">Get a Quote</a><a href="tel:+971" class="nav-link btn btn-call flex-fill text-center">Call Now</a></div>
    </nav>
    
    {{-- Side Bar --}}
    <div class="tp-offcanvas-area">
        <div class="tp-offcanvas-wrapper">
            <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
                <div class="tp-offcanvas-logo"><a href="#"><img class="logo-1" src="{{ asset('css/new-assets/img/logo/logoo.png') }}" alt="WbDigitech Logo"><img class="logo-2" src="{{ asset('css/new-assets/img/logo/logoo.png')}}" alt="Wbdigitech Logo White"></a></div>
                <div class="tp-offcanvas-close d-flex align-items-center">
                    <!-- Visible cancel button for UX -->
                    <button class="tp-offcanvas-cancel-btn btn btn-sm btn-light me-2" aria-label="Cancel sidebar" style="display:inline-block;visibility:visible;">Cancel</button>
                    <button class="tp-offcanvas-close-btn" title="menu icon digital marketing agency dubai"><svg width=37 height=38 viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></button>
                </div>
            </div>
            <div class="tp-offcanvas-main">
                <div class="tp-offcanvas-content">
                    <h3 class="tp-offcanvas-title " style=" color: #0A3D62">Hello There!</h3>
                </div>
                <div class="tp-main-menu-mobile d-xl-none"></div>
                <div class="tp-offcanvas-gallery d-none">
                    <div class="row gx-2">
                        <div class="col-md-3 col-3">
                            <div class="tp-offcanvas-gallery-img fix"><a href="#"><img src="{{ asset('css/new-assets/img/menu/offcanvas/offcanvas-1.jpg')}}" alt="Menu Icon"></a></div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="tp-offcanvas-gallery-img fix"><a href="#"><img src="{{ asset('css/new-assets/img/menu/offcanvas/offcanvas-2.jpg')}}" alt="Menu Icon"></a></div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="tp-offcanvas-gallery-img fix"><a href="#"><img src="{{ asset('css/new-assets/img/menu/offcanvas/offcanvas-3.jpg')}}" alt="Menu Icon"></a></div>
                        </div>
                        <div class="col-md-3 col-3">
                            <div class="tp-offcanvas-gallery-img fix"><a href="#"><img src="{{ asset('css/new-assets/img/menu/offcanvas/offcanvas-4.jpg')}}" alt="Menu Icon"></a></div>
                        </div>
                    </div>
                </div>
                <div class="tp-offcanvas-contact">
                    <h3 class="tp-offcanvas-title sm">Contact Us</h3>
                    <ul>
                        <li><a href="tel:+971 50 239 0775">Phone: +971-50-239-0775</a></li>
                        <li><a href="tel:+971 4 255 9928">Landline: +971-4-255-9928</a></li>
                        <li><a href="mailto:info@wbdigitech.com">info@wbdigitech.com</a></li>
                        <li><a href="https://g.co/">504 Raffa Building Rolla Street Bur Dubai, UAE</a></li>
                    </ul>
                </div>
                <div class="tp-offcanvas-social d-none">
                    <h3 class="tp-offcanvas-title sm">Follow Us</h3>
                    <ul>
                        <li><a href="#"><svg width=16 height=16 viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></a></li>
                        <li><a href="#"><svg width=18 height=18 viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z" stroke="currentColor" stroke-width="1.5" /><path d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg></a></li>
                        <li><a href="#"><svg width=18 height=11 viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" /><path d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" /><path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" /></svg></a></li>
                        <li><a href="#"><svg width=18 height=14 viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" /><path d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z" fill="currentColor" /></svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Offcanvas behaviour: fixed positioning, overlay and JS to toggle -->
<style>
    /* Ensure the offcanvas sits above the page and is full height */
    .tp-offcanvas-area {
        position: fixed;
        top: 0;
        /* keep transform hiding from theme's main.css; width forced to match theme */
        width: 450px !important; /* match compiled main.css */
        max-width: 95%;
        height: 100vh;
        background: #fff;
        z-index: 2000;
        box-shadow: -10px 0 30px rgba(0,0,0,0.15);
        transition: right .28s ease;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 40px; /* breathing room for bottom */
    }
    /* The theme's compiled CSS uses the class 'opened' and transform to slide the panel in.
       We toggle the same class in JS so the compiled rules take effect. */
    .tp-offcanvas-area.opened { transform: translateX(0) !important; }

    /* Overlay behind the offcanvas */
    .body-overlay {
        position: fixed;
        inset: 0; /* top:0; right:0; bottom:0; left:0; */
        background: rgba(0,0,0,0.45);
        z-index: 1990;
        display: none;
        transition: opacity .2s ease;
    }
    .body-overlay.opened { display: block; opacity: 1; visibility: visible; }

    /* When offcanvas is open, prevent body from scrolling */
    .prevent-scroll, .prevent-scroll body { overflow: hidden !important; height: 100vh !important; }

    /* Make sure close button is visible */
    .tp-offcanvas-close-btn { background: transparent; border: none; color: inherit; cursor: pointer; }
    .tp-offcanvas-top { z-index: 2010; }

    /* Style for the visible Cancel button to ensure it's readable */
    .tp-offcanvas-cancel-btn {
        background: transparent;
        border: 1px solid rgba(10,61,98,0.12);
        color: #0A3D62;
        padding: 6px 10px;
        font-weight: 600;
        border-radius: 6px;
        box-shadow: none;
        display: inline-block !important;
        z-index: 2020;
    }
    .tp-offcanvas-close .tp-offcanvas-cancel-btn { display: inline-flex; align-items: center; }

    /* Small screens: make offcanvas full width for better UX */
    @media (max-width: 576px) {
        .tp-offcanvas-area { width: 100%; right: -100%; }
        .tp-offcanvas-area.open { right: 0; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var openBtn = document.querySelector('.tp-offcanvas-open-btn');
        var closeBtn = document.querySelector('.tp-offcanvas-close-btn');
        var offcanvas = document.querySelector('.tp-offcanvas-area');
        var overlay = document.querySelector('.body-overlay');

        if (!offcanvas) return; // nothing to do

        function openOffcanvas() {
            // Add both 'opened' and 'open' for compatibility
            offcanvas.classList.add('opened');
            offcanvas.classList.add('open');
            if (overlay) overlay.classList.add('opened');
            document.body.classList.add('prevent-scroll');
        }

        function closeOffcanvas() {
            offcanvas.classList.remove('opened');
            offcanvas.classList.remove('open');
            if (overlay) overlay.classList.remove('opened');
            document.body.classList.remove('prevent-scroll');
        }

    if (openBtn) openBtn.addEventListener('click', function (e) { e.preventDefault(); openOffcanvas(); });
    if (closeBtn) closeBtn.addEventListener('click', function (e) { e.preventDefault(); closeOffcanvas(); });

    // New visible cancel button (for clarity) - closes offcanvas
    var cancelBtn = document.querySelector('.tp-offcanvas-cancel-btn');
    if (cancelBtn) cancelBtn.addEventListener('click', function (e) { e.preventDefault(); closeOffcanvas(); });
        if (overlay) overlay.addEventListener('click', function () { closeOffcanvas(); });

        // Close on Escape key
        document.addEventListener('keyup', function (e) {
            if (e.key === 'Escape') closeOffcanvas();
        });
    });
</script>

    <!-- HEADER -->
    <header class="tp-header-height">

        <div id="header-sticky" class="tp-header-area tp-header-mob-space tp-transparent z-index-9999">

            <!-- ===== TOP CONTACT BAR (FULL WIDTH) ===== -->
            <div class="header-top header-top-black">
                <div class="container-fluid px-0">
                    <div class="row gx-0 align-items-center">

                        <!-- Left side: contacts -->
                        <div class="col-md-6 d-flex align-items-center ps-3">
                            <a href="tel:+971502390775" class="text-white me-4 text-decoration-none small d-flex align-items-center"><i class="fa fa-phone me-2" aria-hidden="true"></i>+971-50-239-0775</a>
                            <a href="mailto:info@wbdigitech.ae" class="text-white text-decoration-none small d-flex align-items-center"><i class="fa fa-envelope me-2" aria-hidden="true"></i>info@wbdigitech.ae</a>
                        </div>

                        <!-- Right side: socials + language -->
                        <div class="col-md-6 d-flex justify-content-end align-items-center pe-3">
                            <div class="social-icons d-flex align-items-center">
                                <a href="https://www.linkedin.com/" target="_blank" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white ms-3"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/" target="_blank" class="text-white ms-3"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.youtube.com/" target="_blank" class="text-white ms-3"><i class="fab fa-youtube"></i></a>
                                <a href="https://twitter.com/" target="_blank" class="text-white ms-3"><i class="fab fa-twitter"></i></a>
                            </div>

                           <!-- Language Dropdown (works with Google Translate) -->
                            <div class="dropdown ms-3">
                                <a id="langDropdownBtn" 
                                class="dropdown-toggle text-white text-decoration-none" 
                                href="#" 
                                role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false">
                                    <span id="langLabel">🇺🇸 English</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="translateLanguage('en')">🇺🇸 English</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="translateLanguage('ar')">🇦🇪 العربية</a></li>
                                </ul>
                            </div>

                                    <!-- NEW Get Free SEO Button -->
                            <a href="{{ route('seo-request.public') }}" class="btn btn-sm text-white"
                            style="background: linear-gradient(90deg,#0e5689,#0077B6); border:none; padding:6px 14px; border-radius:4px; font-weight:600; font-size:13px;">
                            🚀 Get Free SEO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== END TOP CONTACT BAR ===== -->

            <!-- MAIN HEADER (logo + nav) - keep this white so it doesn't inherit the black top bar color -->
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="tp-header-logo"><a class="logo-1" href="{{ route('home')}}"><img src="{{ asset('css/new-assets/img/logo/logo.jpeg')}}" alt="Wbdigitech Logo"></a><a class="logo-2" href="#"><img src="{{ asset('css/new-assets/img/logo/logo.jpeg')}}" alt="Wbdigitech Logo White"></a></div>
                        </div>
                        <div class="col-xl-8 col-lg-9 d-none d-xl-block">
                            <div class=" tp-header-menu header-main-menu text-center">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li><a href={{ route('about') }}>About Us</a></li>
                                        <li class="has-dropdown"><a href="{{ route('services.public')}}">What We Do</a>
                                            <div class="tp-submenu submenu tp-mega-menu">
                                                <div class="tp-menu-fullwidth">
                                                    <div class="tp-megamenu-portfolio p-relative">
                                                        <div class="tp-megamenu-portfolio-banner d-none "><img src="{{ asset('css/new-assets/img/menu/portfolio-menu/portfolio.png')}}" alt="Wbdigitech Portfolio"></div>
                                                        <div class="row gx-50">
                                                            <div class="col-xxl-12 col-xl-12">
                                                                <div class="tp-megamenu-list-box">
                                                                    <div class="row gx-50">
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list">
                                                                                <h4 class="tp-megamenu-title"><a href="#">WEB DESIGN & DEVELOPMENT</a></h4>
                                                                                <div class="tp-megamenu-list-wrap tp-portfolio-menu-style">
                                                                                    <ul>
                                                                                        <li><a href="#">Website Development</a></li>
                                                                                        <li><a href="#">Website Design</a></li>
                                                                                        <li><a href="#">Ecommerce Development</a></li>
                                                                                        <li><a href="#">Shopify Development</a></li>
                                                                                        <li><a href="#">Website maintenance</a></li>
                                                                                        <li><a href="#">WordPress Development</a></li>
                                                                                        <li><a href="#">Content Writing</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list">
                                                                                <h4 class="tp-megamenu-title"><a href="#">GOOGLE ADS MANAGEMENT</a></h4>
                                                                                <div class="tp-megamenu-list-wrap tp-portfolio-menu-style">
                                                                                    <ul>
                                                                                        <li><a href="#">PPC</a></li>
                                                                                        <li><a href="#">Google Shopping Ads</a></li>
                                                                                        <li><a href="#">Amazon Marketing</a></li>
                                                                                        <li><a href="#">Google Ads Management</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                                                <h4 class="tp-megamenu-title"><a href="#">SEO</a></h4>
                                                                                <div class="tp-megamenu-list-wrap">
                                                                                    <ul class="">
                                                                                        <li><a href="#">Content Marketing</a></li>
                                                                                        <li><a href="#">Reputation management</a></li>
                                                                                        <li><a href="#">Search Engine Optimisation Audit</a></li>
                                                                                        <li><a href="#">Ecommerce SEO</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                                                <h4 class="tp-megamenu-title"><a href="#">Mobile Application Development</a></h4>
                                                                                <div class="tp-megamenu-list-wrap">
                                                                                    <ul>
                                                                                        <li><a href="#">Data Processing</a></li>
                                                                                        <li><a href="#">Data Cleansing</a></li>
                                                                                        <li><a href="#">Data Entry</a></li>
                                                                                        <li><a href="#">Call Center</a></li>
                                                                                        <li><a href="#">Email Marketing</a></li>
                                                                                        <li><a href="#">Telemarketing</a></li>
                                                                                        <li><a href="#">Customer care</a></li>
                                                                                        <li><a href="#">Virtual Reception</a></li>
                                                                                        <li><a href="#">Customer Satisfaction Survey</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                                                <h4 class="tp-megamenu-title page_speed_424355281"><a href="#">SOCIAL MEDIA MARKETING</a></h4>
                                                                                <div class="tp-megamenu-list-wrap">
                                                                                    <ul>
                                                                                        <li><a href="#">Facebook Advertising</a></li>
                                                                                        <li><a href="#">LinkedIn Advertising</a></li>
                                                                                        <li><a href="#">Pinterest Advertising</a></li>
                                                                                        <li><a href="#">Instagram Advertising</a></li>
                                                                                        <li><a href="#">Twitter Advertising</a></li>
                                                                                        <li><a href="#">Youtube Ads</a></li>
                                                                                        <li><a href="#">Tiktok Ads</a></li>
                                                                                        <li><a href="#">Snap Chat Ads</a></li>
                                                                                        <li><a href="#">Whatsapp Marketing</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-2 col-xl-2">
                                                                            <div class="tp-megamenu-list tp-megamenu-list-2 ml-20">
                                                                                <h4 class="tp-megamenu-title page_speed_424355281"><a href="#">GRAPHIC DESINGING</a></h4>
                                                                                <div class="tp-megamenu-list-wrap">
                                                                                    <ul>
                                                                                        <li><a href="#">Logo design</a></li>
                                                                                        <li><a href="#">Leaflet Design</a></li>
                                                                                        <li><a href="#">Brochure design</a></li>
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
                                            </div>
                                        </li>
                                        <li><a href="{{ route('blogs.public')}}">Blog</a></li>
                                        <li><a href="{{ route('portfolio.public')}}">Portfolio</a></li>
                                        <li><a href="{{ route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg col-6">
                            <div class="tp-header-bar text-end"><button class="tp-offcanvas-open-btn" title="Mobile Menu Icon"><span></span><span></span></button></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </header>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
