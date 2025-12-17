<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

<footer class="footer-area text-white" style="background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%); padding:50px 0 0 0;">

    <div class="container pb-4">
        <div class="row gy-5">

            <!-- Logo + Tagline + Social -->
            <div class="col-lg-3 col-md-6">
                <img src="{{asset('css/new-assets/img/logo/logoo.png')}}"  loading="lazy" 
         decoding="async" class="img-fluid mb-3" style="max-width:180px; filter: brightness(0) invert(1);">

                <p class="text-white">Empowering businesses to succeed in the digital age.</p>

                 <div class="d-flex gap-3 mt-3">
                    <a href="https://www.linkedin.com/company/wb-digitech/" target="_blank" class="text-white fs-5"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/wbdigitech.ae/" target="_blank" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/wbdigitechuae/" target="_blank" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.pinterest.com/wbdigitech/" target="_blank" class="text-white fs-5"><i class="fab fa-pinterest"></i></a>
                    <a href="https://x.com/wbdigitech" target="_blank" class="text-white fs-5"><i class="fab fa-x"></i></a>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Our Services</h5>
                <ul class="list-unstyled footer-links">
                  <li><a href="{{ route('services.web_dev') }}" class="text-white text-decoration-none d-block mb-2">Web Development</a></li>
                    <li><a href="#" class="text-white text-decoration-none d-block mb-2">CRM Development</a></li>
                    <li><a href="{{ route('services.mobile') }}" class="text-white text-decoration-none d-block mb-2">Mobile Application Development</a></li>
                    <li><a href="{{ route('services.seo') }}" class="text-white text-decoration-none d-block mb-2">Search Engine Optimization</a></li>
                    <li><a href="{{ route('services.smm') }}" class="text-white text-decoration-none d-block mb-2">Social Media Marketing</a></li>
                    <li><a href="{{ route('services.app_store_optimization') }}" class="text-white text-decoration-none d-block mb-2">App Store Optimization (ASO)</a></li>
                    <li><a href="{{ route('services.graphic') }}" class="text-white text-decoration-none d-block mb-2">Graphic Designing</a></li>
                    <li><a href="{{ route('services.videography') }}" class="text-white text-decoration-none d-block mb-2">Videography</a></li>
                </ul>
            </div>

            <!-- Useful Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Useful Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('blogs.public') }}" class="text-white text-decoration-none d-block mb-2">Blogs</a></li>
                    <li><a href="{{ route('careers.public') }}" class="text-white text-decoration-none d-block mb-2">Careers</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-white text-decoration-none d-block mb-2">Privacy Policy</a></li>
                    <li><a href="{{ route('cookie') }}" class="text-white text-decoration-none d-block mb-2">Terms and Conditions</a></li>
                    {{-- <li><a href="#" class="text-white text-decoration-none d-block mb-2">Frequently Asked Questions</a></li> --}}
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Get in Touch</h5>
               <p class="mb-2"> <i class="fa fa-phone me-2 text-white"></i><a href="tel:+971 4 255 9928" class="text-white text-decoration-none">+971-4-255-9928</a></p> 
                <p class="mb-2"><i class="fa fa-phone me-2 text-white"></i><a class="text-white text-decoration-none" href="tel:+971 50 239 0775">+971-50-239-0775</a></p>

                <p class="mb-2">
                    <i class="fa fa-envelope me-2 text-white"></i>
                    <a href="mailto:info@wbdigitech.com" class="text-white text-decoration-none">info@wbdigitech.com</a>
                </p>

                <p class="mb-2 text-white">
                    <i class="fa fa-map-marker-alt me-2 text-white"></i>
                    #504,Raffa Building<br>Rolla Street Bur, Dubai, UAE.
                </p>
            </div>

        </div>
    </div>

</footer>


</div>
</div>
<!-- Consultant Bar -->
<div id="consultant-bar">
  <div class="consultant-content">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" 
         alt="WhatsApp" class="whatsapp-icon"  loading="lazy" 
         decoding="async">
    <div class="consultant-text">
      <h3>Talk with an <span>expert</span></h3>
      <p>Get expert advice on the right strategy for your business!</p>
    </div>
    <a href="https://wa.me/971502390775" target="_blank" class="consultant-btn">
      FREE CONSULTATION
    </a>
    <button id="consultant-close">×</button>
  </div>
</div>


<script>
// Function to show the consultant bar
function showConsultantBar() {
    const bar = document.getElementById("consultant-bar");

    // Check if the bar has already been shown in this session
    if (!sessionStorage.getItem("consultantShown")) {
        bar.classList.add("active"); // show the bar
        sessionStorage.setItem("consultantShown", "true"); // mark as shown
    }
}

// Show bar after scrolling 400px only if not already shown
window.addEventListener("scroll", function() {
    const bar = document.getElementById("consultant-bar");
    if (window.scrollY > 400 && !sessionStorage.getItem("consultantShown")) {
        showConsultantBar();
    }
});

// Close button hides the bar permanently for the session
document.getElementById("consultant-close").addEventListener("click", function() {
    document.getElementById("consultant-bar").style.display = "none";
    sessionStorage.setItem("consultantShown", "true"); // don't show again
});

// Optional: show immediately when the page loads (instead of scroll)
// showConsultantBar();
</script>


