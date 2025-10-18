<footer class="footer-area text-white" style="background: linear-gradient(90deg, #1166a3 0%, #31a8e8 100%); position: relative; z-index: 5;">

    <!-- Middle Section -->
    <div class="container py-5">
        <div class="row g-4">
            
            <!-- Map (Left side, smaller) -->
            <div class="col-lg-3">
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.520189249895!2d55.29008331538392!3d25.256856283865385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f434e6b4f19b9%3A0x1b65ad859ed8c1bb!2sWB%20Digitech!5e0!3m2!1sen!2sae!4v1736428800000!5m2!1sen!2sae" 
                        width="100%" 
                        height="180" 
                        style="border:0; border-radius:8px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Contact Info (above the map column visually) -->
            <div class="col-lg-3 text-white">
                <div class="mb-4">
                    <h4 class="fw-bold mb-3">Say Hello At:</h4>
                    <p><a href="mailto:info@wbdigitech.com" class="text-white text-decoration-none">info@wbdigitech.com</a></p>
                    <p>
                      <a href="https://www.google.com/maps/place/WB+Digitech/@25.256856,55.290083,17z"  
                         target="_blank" class="text-white text-decoration-none" rel="noopener noreferrer">
                         504 Raffa Building <br> Rolla Street Bur Dubai,<br>UAE,
                      </a>
                    </p>
                </div>

                <!-- Social Icons -->
                <div class="mb-4">
                    <h4 class="fw-bold mb-3">Follow us:</h4>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/" target="_blank" class="text-white fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" class="text-white fs-4"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/" target="_blank" class="text-white fs-4"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form (Right side) -->
            <div class="col-lg-6">
                <div class="bg-white text-dark rounded shadow p-4 h-100">
                    <div class="text-center mb-3">
                        <img src="{{asset('css/new-assets/img/logo/logo.jpeg')}}" alt="Logo" class="img-fluid w-50 mb-2">
                        <p class="mb-1 fw-bold">Get a call within 55 seconds</p>
                        <small>Leave your number and message below, and we’ll reach out to help you immediately!</small>
                    </div>
                    <form action="{{route('contact.send')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="mb-3">
                            <label class="fw-semibold">Name*</label>
                            <input type="text" name="name" class="form-control" required placeholder="Your Name">
                        </div>
                        
                        <div class="mb-3">
                            <label class="fw-semibold">Email*</label>
                            <input type="email" name="email" class="form-control" required placeholder="Your Email">
                        </div>
                        
                        <div class="mb-3">
                            <label class="fw-semibold">Phone*</label>
                            <div class="input-group">
                                <span class="input-group-text">+971</span>
                                <input type="tel" name="phone" class="form-control" required placeholder="Your Phone Number">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold">Message</label>
                            <textarea name="message" class="form-control" rows="3" placeholder="How can we help you?"></textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn px-4 py-2 fw-semibold" type="submit" style="background:#0077B6; color:white; border:none; border-radius:6px;">
                                Call Me
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom py-3" style="background:#0f7cca;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>
                <a href="{{ route('privacy') }}" class="text-white text-decoration-none">Privacy Policy</a> | 
                <a href="{{ route('cookie') }}" class="text-white text-decoration-none">Cookie Policy</a>
            </div>
            <p class="mb-0 text-white">© 2025 Copyrights – WB-DIGITECH</p>
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
      <h3>Talk <span>strategy</span> with an expert</h3>
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
  box-shadow: 0 -2px 10px rgba(59, 86, 208, 0.938);
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
  color: rgb(0, 106, 255);
}

.consultant-text p {
  margin: 3px 0 0;
  color: #666;
  font-size: 14px;
}

.consultant-btn {
  margin-left: auto;
  background: rgb(0, 106, 255);
  color: #fff;
  font-weight: bold;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
}

.consultant-btn:hover {
  background: rgb(153, 171, 197);
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

