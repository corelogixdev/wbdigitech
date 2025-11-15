<footer class="footer-area text-white" style="background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%); padding:50px 0 0 0;">

    <div class="container pb-4">
        <div class="row gy-5">

            <!-- Logo + Tagline + Social -->
            <div class="col-lg-3 col-md-6">
                <img src="{{asset('css/new-assets/img/logo/logoo.png')}}" class="img-fluid mb-3" style="max-width:180px; filter: brightness(0) invert(1);">

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
                    <li><a href="#" class="text-white text-decoration-none d-block mb-2">App Store Optimization (ASO)</a></li>
                    <li><a href="{{ route('services.graphic') }}" class="text-white text-decoration-none d-block mb-2">Graphic Designing</a></li>
                    <li><a href="#" class="text-white text-decoration-none d-block mb-2">Videography</a></li>
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
                    #504,Raffa Building<br>Rolla Street Bur,<br>Dubai, UAE.
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
         alt="WhatsApp" class="whatsapp-icon">
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

<style>
/* Hidden by default */
#consultant-bar {
  position: fixed;
  bottom: -120px; /* hides below screen */
  left: 0;
  right: 0;
  background: #fff;
  border-top: 2px solid #eee;
  padding: 15px 30px;
  box-shadow: 0 -2px 10px rgba(16, 40, 145, 0.938);
  transition: bottom 0.5s ease;
  z-index: 9999;
}

#consultant-bar.active {
  bottom: 0; /* slide up */
}

.consultant-content {
  display: flex;
  align-items: center;
  gap: 15px;
}

.whatsapp-icon {
  width: 50px;
  height: 50px;
}

.consultant-text h3 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
  color: #333;
}

.consultant-text h3 span {
  color:#1166a3 ;
}

.consultant-text p {
  margin: 3px 0 0;
  color: #666;
  font-size: 14px;
}

.consultant-btn {
  margin-left: auto;
  background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%);
  color: #fff;
  font-weight: bold;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
}

.consultant-btn:hover {
  background: rgb(18, 67, 135);
  color: white;
}

#consultant-close {
  background: transparent;
  border: none;
  font-size: 22px;
  margin-left: 15px;
  cursor: pointer;
  color: #1f5ee6;
}
</style>

<style>
/* Mobile: make consultant bar compact and hide duplicate WhatsApp elements */
@media (max-width: 767px) {
  #consultant-bar{
    left: 12px;
    right: 12px;
    bottom: 12px;
    padding: 8px 12px;
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.14);
  }
  .consultant-content{ gap:10px; align-items:center; }
  .whatsapp-icon{ display:none !important; }
  .consultant-text h3{ font-size:14px; margin:0; }
  .consultant-text p{ display:none; }
  .consultant-btn{ display:none !important; }
  #consultant-close{ margin-left:8px; font-size:20px; color:#0a66c2; }
}
</style>

<script>
// Show bar after scrolling 400px
window.addEventListener("scroll", function() {
  let bar = document.getElementById("consultant-bar");
  if (window.scrollY > 400) {
    bar.classList.add("active");
  }
});

// Close button
document.getElementById("consultant-close").addEventListener("click", function() {
  document.getElementById("consultant-bar").style.display = "none";
});
</script>


<style>
    .footer-bottom img {
    filter: brightness(0) invert(1);
}
.footer-area a:hover { color: #00A8E8 !important; } /* same hover accent as header */
.footer-big-title a:hover { text-decoration: underline; }
@media(max-width: 767px){
  .footer-area .list-inline-item { display: block; margin: 6px 0; }
}
</style>

