<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}">

  <title>@yield('title')</title>

  {{-- Dynamic meta tags --}}
  @yield('meta')

  {{-- Handle the meta_description section format automatically --}}
  @sectionMissing('meta')
    @if(View::hasSection('meta_description'))
      <meta name="description" content="@yield('meta_description')">
    @endif
  @endif


  <!-- External Libraries -->
  <link rel="stylesheet" href="{{ asset('vendor/core/plugins/language/css/language-public.css') }}">
  <link rel="stylesheet" href="{{ asset('themes/agon/css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Big+Shoulders+Display:wght@400;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    referrerpolicy="no-referrer" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('css/new-assets/favi.png') }}">

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

  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "wv3gd29h0d");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CMNC0P5HKL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CMNC0P5HKL');
</script>

</head>

<body id="body" class="tp-magic-cursor" style="overflow-x: hidden;">
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>

  <a href="https://wa.me/971502390775" class="float" title="Whatsapp WB-DIGITECH" target="_blank"><i
      class="fab fa-whatsapp my-float"></i></a>



  @include('layouts.headerLayout')
  @yield('content')
  @include('layouts.footerLayout')



  {{-- External JS --}}
  {{-- Vendor / Core --}}
  <script src="{{ asset('themes/agon/new-assets/js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('themes/agon/new-assets/js/gsap.js') }}" defer></script>
  <script src="{{ asset('themes/agon/new-assets/js/nice-select.js') }}" defer></script>
  <script src="{{ asset('themes/agon/new-assets/js/tp-cursor.js') }}" defer></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin=anonymous referrerpolicy="no-referrer" defer></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/custom.js') }}"></script>

  {{-- Language Plugin --}}
  <script src="{{ asset('vendor/core/plugins/language/js/language-public.js') }}" defer></script>
  <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-KB33VJ6height="0" width=0
      class="page_speed_1689186421"></iframe></noscript>
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

</body>

</html>