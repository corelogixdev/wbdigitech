<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Dynamic meta tags --}}
    @yield('meta')


    <!-- External Libraries -->
        {{-- <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin=anonymous referrerpolicy="no-referrer">
        <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin=anonymous referrerpolicy="no-referrer"> --}}
        <link rel="stylesheet" href="{{ asset('vendor/core/plugins/language/css/language-public.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('vendor/core/core/base/libraries/ckeditor/content-styles.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('themes/agon/css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Big+Shoulders+Display:wght@400;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"  referrerpolicy="no-referrer" />
   
        <!-- Favicon -->
       <link rel="icon" type="image/png" href="{{ asset('css/new-assets/img/logo/logo.jpeg') }}">

        <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/global.css') }}">
      <link rel="stylesheet" href="{{ asset('css/layout_main.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/custom-animation.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('css/new-assets/css/style.integration.css') }}">
      

</head>

<body id="body" class="tp-magic-cursor">
   <div id="magic-cursor">
        <div id="ball"></div>
    </div>
  
<a href="https://wa.me/971502390775" class="float" title="Whatsapp WB-DIGITECH" target="_blank"><i class="fab fa-whatsapp my-float"></i></a>


   
        @extends('layouts.headerLayout');
        @yield('content')
        @extends('layouts.footerLayout');

        
        
        
        
        {{-- External JS --}}
        {{-- Vendor / Core --}}
    <script src="{{ asset('themes/agon/new-assets/js/vendor/jquery.js') }}"></script>
    {{-- <script src="{{ asset('themes/agon/new-assets/js/bootstrap-bundle.js') }}" defer></script> --}}
    <script src="{{ asset('themes/agon/new-assets/js/gsap.js') }}" defer></script>
    {{-- <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-to-plugin.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-smoother.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/tween-max.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/gsap-split-text.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/chroma.min.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/gsap-scroll-trigger.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/scroll-magic.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/range-slider.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/swiper-bundle.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/slick.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/three.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/magnific-popup.js') }}" defer></script> --}}
    <script src="{{ asset('themes/agon/new-assets/js/nice-select.js') }}" defer></script>
    {{-- <script src="{{ asset('themes/agon/new-assets/js/purecounter.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/beforeafter.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/isotope-pkgd.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/imagesloaded-pkgd.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/ajax-form.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('themes/agon/new-assets/js/webgl.js') }}" defer></script> --}}
    <script src="{{ asset('themes/agon/new-assets/js/tp-cursor.js') }}" defer></script>
    <script src="{{ asset('themes/agon/new-assets/js/main.js') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
  
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>

    {{-- Language Plugin --}}
    <script src="{{ asset('vendor/core/plugins/language/js/language-public.js') }}" defer></script>


    <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-KB33VJ6height="0" width=0 class="page_speed_1689186421"></iframe></noscript>
    {{-- <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin=anonymous referrerpolicy="no-referrer" defer></script> --}}


<!-- Hidden container for Google Translate -->
<div id="google_translate_element" style="display:none;"></div>

<script>
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'en,ar',
      autoDisplay: false
    }, 'google_translate_element');
  }

  function translateLanguage(lang) {
    const label = document.getElementById('langLabel');
    if (label) label.textContent = (lang === 'ar' ? '🇦🇪 العربية' : '🇺🇸 English');

    function apply() {
      const select = document.querySelector('.goog-te-combo');
      if (!select) {
        setTimeout(apply, 300);
        return;
      }

      // reset first
      select.value = "";
      select.dispatchEvent(new Event("change"));

      setTimeout(() => {
        select.value = lang;
        select.dispatchEvent(new Event("change"));
      }, 200);

      // set text direction
      if (lang === 'ar') {
        document.documentElement.setAttribute('dir', 'rtl');
        document.documentElement.setAttribute('lang', 'ar');
      } else {
        document.documentElement.setAttribute('dir', 'ltr');
        document.documentElement.setAttribute('lang', 'en');
      }
    }
    apply();
  }
</script>


<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


{{-- 
<script>
  window.addEventListener("load", function () {
    const splash = document.getElementById("splash-screen");
    setTimeout(() => {
      splash.classList.add("hidden");
    },1000); // optional delay
  });
</script> --}}

</body>



</html>
