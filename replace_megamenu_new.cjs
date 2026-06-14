const fs = require('fs');

const filePath = 'd:/corelogix/wbdigitech/resources/views/layouts/headerLayout.blade.php';
let content = fs.readFileSync(filePath, 'utf8');

const startStr = '<li class="has-dropdown"><a href="#">What We Do</a>';
const endStr = '{{-- AI Marketing Simple Dropdown --}}';

const newMegaMenu = `<li class="has-dropdown megamenu-trigger">
                                        <a href="#">What We Do <i class="fas fa-chevron-down toggle-arrow"></i></a>
                                        <div class="tp-submenu submenu tp-mega-menu modern-mega-menu">
                                            <div class="mega-menu-container">
                                                <!-- Left Panel (Overview) -->
                                                <div class="mega-menu-overview">
                                                    <div class="overview-content">
                                                        <span class="badge bg-light text-dark mb-3 rounded-pill px-3 py-2 fw-bold" style="font-size:12px;"><i class="fas fa-star text-warning me-1"></i> SERVICE STACK</span>
                                                        <h3 class="overview-title mb-3" style="color: #0A3D62; font-weight:800; line-height:1.2;">Pick the right digital setup path with fewer surprises.</h3>
                                                        <p class="overview-desc mb-4" style="color: #4a5568; font-size:15px; line-height:1.5;">Web development, Google Ads, SEO, Mobile Apps, Social Media, and Graphic Design arranged by business need.</p>
                                                        
                                                        <div class="row g-2 mb-4">
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">Fast setup</div></div>
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">Clear process</div></div>
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">Full support</div></div>
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">ROI focused</div></div>
                                                        </div>

                                                        <a href="{{ route('contact') }}" class="fw-bold text-uppercase" style="color: #0A3D62; text-decoration:none; font-size:13px; letter-spacing:1px;">VIEW ALL SERVICES <i class="fas fa-arrow-right ms-1"></i></a>
                                                    </div>
                                                </div>

                                                <!-- Right Panel (Scrollable Columns) -->
                                                <div class="mega-menu-services">
                                                    <!-- Column 1: Web Design & Development -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">WEB DESIGN & DEVELOPMENT</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.web_dev') }}" class="service-card">
                                                                <span class="sc-title">Website Development</span>
                                                                <span class="sc-desc">End-to-end support to launch your company online.</span>
                                                            </a>
                                                            <a href="{{ route('services.content_writing') }}" class="service-card">
                                                                <span class="sc-title">Content Writing</span>
                                                                <span class="sc-desc">Engaging, SEO-optimized copy for your brand.</span>
                                                            </a>
                                                            <a href="{{ route('services.ecommerce_development') }}" class="service-card">
                                                                <span class="sc-title">E-commerce Development</span>
                                                                <span class="sc-desc">Custom e-commerce platforms to scale sales.</span>
                                                            </a>
                                                            <a href="{{ route('services.shopify_development') }}" class="service-card">
                                                                <span class="sc-title">Shopify Development</span>
                                                                <span class="sc-desc">Fast, secure, and beautiful Shopify stores.</span>
                                                            </a>
                                                            <a href="{{ route('services.website_design') }}" class="service-card">
                                                                <span class="sc-title">Website Design</span>
                                                                <span class="sc-desc">Stunning UI/UX design that converts visitors.</span>
                                                            </a>
                                                            <a href="{{ route('services.website_maintainance') }}" class="service-card">
                                                                <span class="sc-title">Website Maintenance</span>
                                                                <span class="sc-desc">Keeping your site secure, fast, and updated.</span>
                                                            </a>
                                                            <a href="{{ route('services.wordpress_development') }}" class="service-card">
                                                                <span class="sc-title">WordPress Development</span>
                                                                <span class="sc-desc">Flexible and scalable WordPress solutions.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 2: Google Ads Management -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">GOOGLE ADS MANAGEMENT</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.amazon_marketing') }}" class="service-card">
                                                                <span class="sc-title">Amazon Marketing</span>
                                                                <span class="sc-desc">Optimize your product listings for higher sales.</span>
                                                            </a>
                                                            <a href="{{ route('services.ppc') }}" class="service-card">
                                                                <span class="sc-title">PPC</span>
                                                                <span class="sc-desc">Pay-per-click campaigns that drive instant traffic.</span>
                                                            </a>
                                                            <a href="{{ route('services.google_shopping_ads') }}" class="service-card">
                                                                <span class="sc-title">Google Shopping Ads</span>
                                                                <span class="sc-desc">Showcase products directly on Google search.</span>
                                                            </a>
                                                            <a href="{{ route('services.lead_generation') }}" class="service-card">
                                                                <span class="sc-title">Lead Generation</span>
                                                                <span class="sc-desc">Targeted strategies to capture high-quality leads.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 3: SEO / ASO -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">SEO / ASO</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.page_optimization') }}" class="service-card">
                                                                <span class="sc-title">Page Optimization</span>
                                                                <span class="sc-desc">Enhance on-page elements for better rankings.</span>
                                                            </a>
                                                            <a href="{{ route('services.google_business_profile_seo') }}" class="service-card">
                                                                <span class="sc-title">Google Business Profile</span>
                                                                <span class="sc-desc">Dominate local searches and map results.</span>
                                                            </a>
                                                            <a href="{{ route('services.seo-audit') }}" class="service-card">
                                                                <span class="sc-title">SEO Audit</span>
                                                                <span class="sc-desc">Deep technical analysis of your website.</span>
                                                            </a>
                                                            <a href="{{ route('services.link_building') }}" class="service-card">
                                                                <span class="sc-title">Link Building</span>
                                                                <span class="sc-desc">Acquire high-quality backlinks to boost authority.</span>
                                                            </a>
                                                            <a href="{{ route('services.ecommerce_seo') }}" class="service-card">
                                                                <span class="sc-title">E-commerce SEO</span>
                                                                <span class="sc-desc">Increase organic visibility for your store.</span>
                                                            </a>
                                                            <a href="{{ route('services.technical_seo') }}" class="service-card">
                                                                <span class="sc-title">Technical SEO</span>
                                                                <span class="sc-desc">Fix crawlability, indexation, and speed issues.</span>
                                                            </a>
                                                            <a href="{{ route('services.content_marketing') }}" class="service-card">
                                                                <span class="sc-title">Content Marketing</span>
                                                                <span class="sc-desc">Strategic content creation that drives traffic.</span>
                                                            </a>
                                                            <a href="{{ route('services.guest_posting') }}" class="service-card">
                                                                <span class="sc-title">Guest Posting</span>
                                                                <span class="sc-desc">Publish content on authoritative websites.</span>
                                                            </a>
                                                            <a href="{{ route('services.local_seo') }}" class="service-card">
                                                                <span class="sc-title">Local SEO</span>
                                                                <span class="sc-desc">Attract customers in your specific geographic area.</span>
                                                            </a>
                                                            <a href="{{ route('services.app_store_optimization') }}" class="service-card">
                                                                <span class="sc-title">App Store Optimization (ASO)</span>
                                                                <span class="sc-desc">Improve app visibility and download rates.</span>
                                                            </a>
                                                            <a href="{{ route('services.play_store_seo') }}" class="service-card">
                                                                <span class="sc-title">Play Store SEO</span>
                                                                <span class="sc-desc">Rank higher in the Google Play Store.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 4: Mobile Application -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">MOBILE APP DEVELOPMENT</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.android_app') }}" class="service-card">
                                                                <span class="sc-title">Android App Development</span>
                                                                <span class="sc-desc">Native apps for the world's largest platform.</span>
                                                            </a>
                                                            <a href="{{ route('services.react_native_app') }}" class="service-card">
                                                                <span class="sc-title">React Native App</span>
                                                                <span class="sc-desc">Cross-platform apps with near-native performance.</span>
                                                            </a>
                                                            <a href="{{ route('services.hybrid_app') }}" class="service-card">
                                                                <span class="sc-title">Hybrid App Development</span>
                                                                <span class="sc-desc">Cost-effective apps working on both iOS & Android.</span>
                                                            </a>
                                                            <a href="{{ route('services.app_maintenance') }}" class="service-card">
                                                                <span class="sc-title">App Maintenance</span>
                                                                <span class="sc-desc">Ongoing updates, bug fixes, and improvements.</span>
                                                            </a>
                                                            <a href="{{ route('services.iphone_app') }}" class="service-card">
                                                                <span class="sc-title">iPhone App Development</span>
                                                                <span class="sc-desc">Premium native iOS applications.</span>
                                                            </a>
                                                            <a href="{{ route('services.flutter_app') }}" class="service-card">
                                                                <span class="sc-title">Flutter App Development</span>
                                                                <span class="sc-desc">Beautiful, fast apps using Google's UI toolkit.</span>
                                                            </a>
                                                            <a href="{{ route('services.wearable_app') }}" class="service-card">
                                                                <span class="sc-title">Wearable App Development</span>
                                                                <span class="sc-desc">Apps for smartwatches and other wearable devices.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 5: Social Media Marketing -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">SOCIAL MEDIA MARKETING</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.facebook_advertising') }}" class="service-card">
                                                                <span class="sc-title">Facebook Advertising</span>
                                                                <span class="sc-desc">Highly targeted ad campaigns on Facebook.</span>
                                                            </a>
                                                            <a href="{{ route('services.linkedin_advertising') }}" class="service-card">
                                                                <span class="sc-title">LinkedIn Advertising</span>
                                                                <span class="sc-desc">B2B marketing to reach professionals and decision makers.</span>
                                                            </a>
                                                            <a href="{{ route('services.pinterest_advertising') }}" class="service-card">
                                                                <span class="sc-title">Pinterest Advertising</span>
                                                                <span class="sc-desc">Visual discovery ads to drive sales and traffic.</span>
                                                            </a>
                                                            <a href="{{ route('services.instagram_advertising') }}" class="service-card">
                                                                <span class="sc-title">Instagram Advertising</span>
                                                                <span class="sc-desc">Engaging visual campaigns for brand awareness.</span>
                                                            </a>
                                                            <a href="{{ route('services.twitter_advertising') }}" class="service-card">
                                                                <span class="sc-title">Twitter Advertising</span>
                                                                <span class="sc-desc">Real-time marketing and conversation targeting.</span>
                                                            </a>
                                                            <a href="{{ route('services.youtube_ads') }}" class="service-card">
                                                                <span class="sc-title">YouTube Ads</span>
                                                                <span class="sc-desc">Video advertising on the world's largest video platform.</span>
                                                            </a>
                                                            <a href="{{ route('services.tiktok_ads') }}" class="service-card">
                                                                <span class="sc-title">TikTok Ads</span>
                                                                <span class="sc-desc">Viral, short-form video marketing.</span>
                                                            </a>
                                                            <a href="{{ route('services.snap_chat_ads') }}" class="service-card">
                                                                <span class="sc-title">Snapchat Ads</span>
                                                                <span class="sc-desc">AR lenses and immersive ads for younger audiences.</span>
                                                            </a>
                                                            <a href="{{ route('services.whatsapp_marketing') }}" class="service-card">
                                                                <span class="sc-title">WhatsApp Marketing</span>
                                                                <span class="sc-desc">Direct messaging campaigns and customer support.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 6: Graphic Designing -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">GRAPHIC DESIGNING</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('services.logo_design') }}" class="service-card">
                                                                <span class="sc-title">Logo Design</span>
                                                                <span class="sc-desc">Memorable and unique brand identities.</span>
                                                            </a>
                                                            <a href="{{ route('services.leaflet_design') }}" class="service-card">
                                                                <span class="sc-title">Leaflet Design</span>
                                                                <span class="sc-desc">Eye-catching promotional flyers and leaflets.</span>
                                                            </a>
                                                            <a href="{{ route('services.brochure_design') }}" class="service-card">
                                                                <span class="sc-title">Brochure Design</span>
                                                                <span class="sc-desc">Professional corporate brochures and catalogs.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    `;

// First search for the exact start and end boundaries
let startIndex = content.indexOf(startStr);
let endIndex = content.indexOf(endStr);

if (startIndex !== -1 && endIndex !== -1) {
    let newContent = content.substring(0, startIndex) + newMegaMenu + content.substring(endIndex);
    fs.writeFileSync(filePath, newContent, 'utf8');
    console.log("Successfully replaced mega menu layout safely.");
} else {
    console.log("Error: Boundaries not found. Start:", startIndex, "End:", endIndex);
}
