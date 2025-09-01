<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- External Libraries -->
     <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin=anonymous referrerpolicy="no-referrer">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin=anonymous referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout_main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components_main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new-assets/css/style.integration.css') }}">
    

</head>
<body>

        @extends('layouts.headerLayout');
        @yield('content')
        @extends('layouts.footerLayout');

    <!-- Custom JS -->
    <script src="{{ asset('js/custom_main.js') }}"></script>

    {{-- External JS --}}
    <script src="{{ asset('vendor/core/plugins/language/js/language-public.js?v=2.2.0')}}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('themes/agon/new-assets/js/bootstrap-bundle.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/gsap.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-to-plugin.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-smoother.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/tween-max.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/gsap-split-text.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/chroma.min.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-trigger.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/scroll-magic.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/range-slider.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/swiper-bundle.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/slick.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/three.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/magnific-popup.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/nice-select.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/purecounter.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/beforeafter.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/isotope-pkgd.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/imagesloaded-pkgd.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/ajax-form.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/webgl.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/tp-cursor.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/main.js') }}" defer></script>


</body>

</html>
