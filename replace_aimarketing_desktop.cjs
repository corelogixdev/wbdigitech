const fs = require('fs');

const filePath = 'd:/corelogix/wbdigitech/resources/views/layouts/headerLayout.blade.php';
let content = fs.readFileSync(filePath, 'utf8');

// Use exact string matching with lastIndexOf to target the desktop menu
const startStr = '<li class="has-dropdown">\r\n                                        <a href="{{ route(\'ai_marketing\') }}">AI Marketing</a>';
const startStrAlt = '<li class="has-dropdown">\n                                        <a href="{{ route(\'ai_marketing\') }}">AI Marketing</a>';

const endStr = '                                    </li>\r\n\r\n                                    <li><a href="{{ route(\'blogs.public\')}}">Blog</a></li>';
const endStrAlt = '                                    </li>\n\n                                    <li><a href="{{ route(\'blogs.public\')}}">Blog</a></li>';

const newAiMegaMenu = `<li class="has-dropdown megamenu-trigger">
                                        <a href="{{ route('ai_marketing') }}">AI Marketing <i class="fas fa-chevron-down toggle-arrow"></i></a>
                                        <div class="tp-submenu submenu tp-mega-menu modern-mega-menu">
                                            <div class="mega-menu-container">
                                                <!-- Left Panel (Overview) -->
                                                <div class="mega-menu-overview">
                                                    <div class="overview-content">
                                                        <span class="badge bg-light text-dark mb-3 rounded-pill px-3 py-2 fw-bold" style="font-size:12px;"><i class="fas fa-robot text-primary me-1"></i> AI AUTOMATION</span>
                                                        <h3 class="overview-title mb-3" style="color: #0A3D62; font-weight:800; line-height:1.2;">Unleash the Power of Artificial Intelligence.</h3>
                                                        <p class="overview-desc mb-4" style="color: #4a5568; font-size:15px; line-height:1.5;">Automate processes, increase conversions, and outsmart your competition with AI-driven marketing and web solutions.</p>
                                                        
                                                        <div class="row g-2 mb-4">
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">Data-Driven</div></div>
                                                            <div class="col-6"><div class="border rounded p-2 text-center" style="font-size:13px; font-weight:600; color:#0A3D62;">Higher ROI</div></div>
                                                        </div>

                                                        <a href="{{ route('contact') }}" class="fw-bold text-uppercase" style="color: #0A3D62; text-decoration:none; font-size:13px; letter-spacing:1px;">GET A FREE AI AUDIT <i class="fas fa-arrow-right ms-1"></i></a>
                                                    </div>
                                                </div>

                                                <!-- Right Panel (Scrollable Columns) -->
                                                <div class="mega-menu-services">
                                                    <!-- Column 1: AI Marketing Core -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">INTELLIGENT MARKETING</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('ai_social_media') }}" class="service-card">
                                                                <span class="sc-title">AI Social Media Marketing</span>
                                                                <span class="sc-desc">Automate content generation and engagement.</span>
                                                            </a>
                                                            <a href="{{ route('ai_digital_marketing') }}" class="service-card">
                                                                <span class="sc-title">AI Digital Marketing</span>
                                                                <span class="sc-desc">Predictive analytics and smart campaigns.</span>
                                                            </a>
                                                            <a href="{{ route('ai_google_ads') }}" class="service-card">
                                                                <span class="sc-title">AI Google Ads</span>
                                                                <span class="sc-desc">Machine learning for ultimate ad optimization.</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- Column 2: AI Web & Tech -->
                                                    <div class="service-column">
                                                        <h4 class="service-col-title">AI WEB SOLUTIONS</h4>
                                                        <div class="service-scroll-area">
                                                            <a href="{{ route('ai_website') }}" class="service-card">
                                                                <span class="sc-title">AI Website</span>
                                                                <span class="sc-desc">Smart, adaptive websites tailored for users.</span>
                                                            </a>
                                                            <a href="{{ route('ai_seo') }}" class="service-card">
                                                                <span class="sc-title">AI Powered SEO</span>
                                                                <span class="sc-desc">Next-generation semantic search optimization.</span>
                                                            </a>
                                                            <a href="{{ route('ai_web_app') }}" class="service-card">
                                                                <span class="sc-title">AI Web App Development</span>
                                                                <span class="sc-desc">Custom web applications with integrated AI.</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li><a href="{{ route('blogs.public')}}">Blog</a></li>`;

let startIndex = content.lastIndexOf(startStr);
if (startIndex === -1) startIndex = content.lastIndexOf(startStrAlt);

let endIndex = content.lastIndexOf(endStr);
let replaceEndLength = endStr.length;
if (endIndex === -1) {
    endIndex = content.lastIndexOf(endStrAlt);
    replaceEndLength = endStrAlt.length;
}

if (startIndex !== -1 && endIndex !== -1 && startIndex < endIndex) {
    let newContent = content.substring(0, startIndex) + newAiMegaMenu + content.substring(endIndex + replaceEndLength);
    fs.writeFileSync(filePath, newContent, 'utf8');
    console.log("Successfully replaced AI Marketing mega menu layout safely.");
} else {
    console.log("Error: Boundaries not found or invalid. Start:", startIndex, "End:", endIndex);
}
