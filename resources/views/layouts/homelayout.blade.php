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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin=anonymous referrerpolicy="no-referrer">
        <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        
       <link rel="stylesheet" href="{{ asset('vendor/core/plugins/language/css/language-public.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/core/core/base/libraries/ckeditor/content-styles.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/agon/css/style.css') }}">
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
    {{-- <link rel="stylesheet" href="{{ asset('css/new-assets/css/style.css') }}"> --}}
    

</head>
<body id="body" class="tp-magic-cursor">
   
        @extends('layouts.headerLayout');
        @yield('content')
        @extends('layouts.footerLayout');

    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>



    
    {{-- External JS --}}
        {{-- Vendor / Core --}}
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

    {{-- Language Plugin --}}
    <script src="{{ asset('vendor/core/plugins/language/js/language-public.js') }}" defer></script>


    <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-KB33VJ6height="0" width=0 class="page_speed_1689186421"></iframe></noscript>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin=anonymous referrerpolicy="no-referrer" defer></script>


           
    <div class="position-fixed bottom-0 end-0 p-3 page_speed_2018363099">
        <div id="live-toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><span class="success text-success"><span class="d-flex"><i class="fi fi-rr-check d-flex align-items-center me-2"></i><strong class="me-auto">Success</strong></span></span><span class="danger text-danger"><span class="d-flex"><i class="fi fi-rr-cross-circle d-flex align-items-center me-2"></i><strong class="me-auto">Error</strong></span></span>
                <span
                    class="info text-info"><span class="d-flex"><i class="fi fi-rr-info d-flex align-items-center me-2"></i><strong class="me-auto">Info</strong></span></span><strong class="me-auto"></strong><small class="time"></small><button type=button class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button></div>
            <div class="toast-body"></div>
        </div>
    </div>


    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 19280090;
        window.__lc.integration_name = "manual_channels";
        window.__lc.product_name = "livechat";;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script><noscript><a href="https://www.livechat.com/chat-with/19280090/" rel="nofollow">Chat with us.</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript></body>



</body>

</html>
