@extends('layouts.homelayout')

@section('title', 'About WB-Digitech | Digital Marketing & Web Solutions in Dubai')
@section('meta_description', 'WB-Digitech is a full-service digital agency based in Dubai, delivering web development, SEO, digital marketing & creative solutions for global brands')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div id="main-content">
                    <div class="ck-content">
                        <!-- Banner Image with proper spacing -->
                        <section class="section-box">
                            <div style="margin-bottom: 50px"></div>
                            <div class="bg-gray-100">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tp-blog-standard-thumb-box p-relative">
                                                <img src="{{ asset('css/new-assets/about_us/banner_about.webp') }}"
                                                    alt="About Hero Banner"
                                                    style="width: 100%; height: auto; border-radius: 16px; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- 🔹 About Section - Redesigned with proper spacing and EXACT content -->
                        <div class="ab-about-area pb-0" style="padding-top: 20px;">
                            <div class="container container-1480">
                                <!-- About WB‑Digitech Title -->
                                <div class="row justify-content-center mb-5">
                                    <div class="col-lg-8 text-center">
                                        <h1 class="tp-hero-title"
                                            style="color:#0A3D62; font-size: 4rem; font-weight: 500; letter-spacing: 1px;">
                                            About
                                            WB‑Digitech
                                        </h1>
                                        <p class="lead fst-italic" style="color: #666; font-size: 1.3rem;">Sign of
                                            Experience. Your aspirations, our strategies.</p>
                                    </div>
                                </div>

                                <!-- Main About Content - FIXED OVERLAPPING with EXACT writer's words -->
                                <div class="row align-items-center g-5 mb-5" style="margin-top: 20px;">
                                    {{-- LEFT: TEXT with EXACT content --}}
                                    <div class="col-xl-6 col-lg-6">
                                        <div id="about-info">
                                            <div class="ab-about-content p-relative"
                                                style="background: white; padding: 40px; border-radius: 24px; box-shadow: 0 20px 50px rgba(10, 61, 98, 0.1);">
                                                <div class="mb-4">
                                                    <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-0 mb-3"
                                                        style="font-size: 1rem; border-radius: 50px;">👋 Welcome</span>
                                                    <p class="lead mb-4"
                                                        style="font-size: 1.2rem; line-height: 1.9; color: #333;">
                                                        To help brands to grow, connect, and stand out in the digital world.
                                                        We do not just create digital assets, we design digital experiences
                                                        which see results and which also provide long term value.
                                                    </p>
                                                    <p
                                                        style="font-size: 1.1rem; line-height: 1.9; color: #444; margin-bottom: 25px;">
                                                        Originally in Pakistan, WB-Digitech which in 2024 took its growth to
                                                        Dubai to better serve our expanding global client base. Now we are
                                                        working with companies across many industries which we help to turn
                                                        their concepts into digital works of art.
                                                    </p>
                                                </div>

                                                <div class="mt-4">
                                                    <h3 class="h4 fw-bold mb-3" style="color: #0A3D62;">Who We Are</h3>
                                                    <p style="font-size: 1.1rem; line-height: 1.9; color: #444;">
                                                        At WB-DigeTech creativity is at the core of our strategy. We are of
                                                        the belief that great digital solutions are brought to life when
                                                        innovation, data and design come together. Our team which includes
                                                        designers, developers, marketers and SEO specialists works in close
                                                        collaboration with clients to see beyond what they want and
                                                        determine what it is they really need to reach their business
                                                        objectives.
                                                    </p>
                                                    <p
                                                        style="font-size: 1.1rem; line-height: 1.9; color: #444; margin-top: 20px;">
                                                        We put the same level of focus and skill into each of the projects
                                                        we take on, we see our clients' brands as extensions of our own
                                                        which is why we ensure quality and transparency at every step.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- RIGHT: IMAGE with proper styling --}}
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="ab-about-right-thumb text-center">
                                            <div style="position: relative; padding: 20px;">
                                                <img src="{{ asset('css/new-assets/about_us/image_about.webp') }}"
                                                    alt="About Us"
                                                    style="width:100%; border-radius: 24px; transform: scale(1.02); transition: transform 0.3s ease;">
                                                <div
                                                    style="position: absolute; bottom: 30px; right: 30px; background: #0A3D62; color: white; padding: 15px 25px; border-radius: 50px; font-weight: bold; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                                                    Since 2019
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- What We Do Section - EXACT content -->
                                <div class="row my-5 pt-4">
                                    <div class="col-12">
                                        <div class="border-top pt-5"></div>
                                        <h2 class="display-6 fw-bold mb-4 text-center" style="color: #0A3D62;">What We Do
                                        </h2>
                                        <p class="text-center mb-5" style="font-size: 1.2rem; color: #555;">We present full
                                            scale digital solutions for your brand's needs:</p>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="p-4 h-100"
                                            style="background: linear-gradient(145deg, #ffffff, #f8f9fa); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                                            <h5 class="fw-bold mb-4 pb-2 border-bottom"
                                                style="color: #0A3D62; font-size: 1.3rem;">🌐 Web & Mobile</h5>
                                            <ul class="list-unstyled" style="font-size: 1.05rem; line-height: 2.2;">
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Web Design
                                                    and Development: Fast, mobile friendly and attractive websites.</li>
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Mobile App
                                                    Development: easy to use and scalable applications.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="p-4 h-100"
                                            style="background: linear-gradient(145deg, #ffffff, #f8f9fa); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                                            <h5 class="fw-bold mb-4 pb-2 border-bottom"
                                                style="color: #0A3D62; font-size: 1.3rem;">📈 Marketing & SEO</h5>
                                            <ul class="list-unstyled" style="font-size: 1.05rem; line-height: 2.2;">
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Digital
                                                    Marketing: strategies that deliver traffic and results.</li>
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Search
                                                    Engine Optimization (SEO): data informed SEO for the long term rank and
                                                    growth.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="p-4 h-100"
                                            style="background: linear-gradient(145deg, #ffffff, #f8f9fa); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                                            <h5 class="fw-bold mb-4 pb-2 border-bottom"
                                                style="color: #0A3D62; font-size: 1.3rem;">🎨 Creative & Social</h5>
                                            <ul class="list-unstyled" style="font-size: 1.05rem; line-height: 2.2;">
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Social
                                                    media marketing: which includes growing communities and building brand
                                                    authority.</li>
                                                <li class="mb-3"><span class="text-primary me-2 fw-bold">✓</span> Graphic
                                                    Design: which tells your brand story through visual creativity.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center mt-3">
                                        <p class="text-muted fst-italic"
                                            style="font-size: 1.1rem; background: #f8f9fa; padding: 20px; border-radius: 50px;">
                                            From small businesses just out of the gate to well established companies we help
                                            in developing a great digital presence which produces real results.
                                        </p>
                                    </div>
                                </div>

                                <!-- Our Approach Section - EXACT content -->
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="border-top pt-5"></div>
                                        <h2 class="display-6 fw-bold mb-4 text-center" style="color: #0A3D62;">Our Approach
                                        </h2>
                                    </div>

                                    <div class="col-lg-12 mb-4">
                                        <div class="p-5"
                                            style=" color: white; border-radius: 30px; box-shadow: 0 20px 40px rgba(10, 61, 98, 0.3);">
                                            <p class="fw-bold mb-4 text-center" style="font-size: 1.4rem;">Our approach is
                                                simple but powerful:</p>
                                            <div class="row g-4">
                                                <div class="col-md-3">
                                                    <div class="text-center p-3">
                                                        <div class="display-4 mb-3">🎯</div>
                                                        <h5 class="fw-bold">Strategy First</h5>
                                                        <p style="font-size: 0.95rem;">we integrate every solution to your
                                                            business goals.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center p-3">
                                                        <div class="display-4 mb-3">✨</div>
                                                        <h5 class="fw-bold">Creative Implementation</h5>
                                                        <p style="font-size: 0.95rem;">which includes designs and campaigns
                                                            that grab attention and inspire action.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center p-3">
                                                        <div class="display-4 mb-3">📊</div>
                                                        <h5 class="fw-bold">Performance Based</h5>
                                                        <p style="font-size: 0.95rem;">we base every decision on what we see
                                                            from performance data.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center p-3">
                                                        <div class="display-4 mb-3">❤️</div>
                                                        <h5 class="fw-bold">Client First</h5>
                                                        <p style="font-size: 0.95rem;">What we achieve is what you achieve.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center mt-4 mb-0 fst-italic"
                                                style="font-size: 1.1rem; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 20px;">
                                                We are of the mind that there is no one size fits all solution. Each brand
                                                is unique which is also true for our strategy.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Our Work Section - EXACT content -->
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="border-top pt-5"></div>
                                        <h2 class="display-6 fw-bold mb-4 text-center" style="color: #0A3D62;">Our Work</h2>
                                    </div>

                                    <div class="col-lg-8 mx-auto">
                                        <div class="p-5 bg-light rounded-5"
                                            style="background: linear-gradient(145deg, #f8f9fa, #ffffff);">
                                            <p class="mb-4 text-center" style="font-size: 1.2rem;">Over the years, we've
                                                successfully delivered:</p>
                                            <div class="row text-center g-4">
                                                <div class="col-md-4">
                                                    <div class="p-3 bg-white rounded-4 shadow-sm">
                                                        <span class="display-6 fw-bold text-primary">50+</span>
                                                        <p class="mt-2 fw-semibold">Website Development Projects</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="p-3 bg-white rounded-4 shadow-sm">
                                                        <span class="display-6 fw-bold text-primary">100+</span>
                                                        <p class="mt-2 fw-semibold">Graphic Designing Projects</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="p-3 bg-white rounded-4 shadow-sm">
                                                        <span class="display-6 fw-bold text-primary">40+</span>
                                                        <p class="mt-2 fw-semibold">SEO Projects</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="p-3 bg-white rounded-4 shadow-sm">
                                                        <span class="display-6 fw-bold text-primary">30+</span>
                                                        <p class="mt-2 fw-semibold">Google Ads Campaigns</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="p-3 bg-white rounded-4 shadow-sm">
                                                        <span class="display-6 fw-bold text-primary">25+</span>
                                                        <p class="mt-2 fw-semibold">Social Media Campaigns</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center mt-4 mb-0 fst-italic" style="font-size: 1.1rem;">
                                                Each of our projects is a display of our commitment to quality, creativity,
                                                and measurable growth.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Why Choose Us Section - EXACT content -->
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="border-top pt-5"></div>
                                        <h2 class="display-6 fw-bold mb-4 text-center" style="color: #0A3D62;">Why Choose
                                            WB‑Digitech?</h2>
                                    </div>

                                    <div class="col-lg-10 mx-auto">
                                        <div class="p-5 bg-white rounded-5 shadow"
                                            style="border: 1px solid rgba(10, 61, 98, 0.1);">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-start">
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary p-3 me-3 rounded-circle">✓</span>
                                                        <div>
                                                            <h5 class="fw-bold">Proven expertise</h5>
                                                            <p>across digital disciplines</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-start">
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary p-3 me-3 rounded-circle">✓</span>
                                                        <div>
                                                            <h5 class="fw-bold">Transparent communication</h5>
                                                            <p>and reliable support</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-start">
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary p-3 me-3 rounded-circle">✓</span>
                                                        <div>
                                                            <h5 class="fw-bold">Global experience</h5>
                                                            <p>with local market understanding</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-start">
                                                        <span
                                                            class="badge bg-primary bg-opacity-10 text-primary p-3 me-3 rounded-circle">✓</span>
                                                        <div>
                                                            <h5 class="fw-bold">Dedicated team</h5>
                                                            <p>that is into growth and innovation.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center mt-4 mb-0 fw-bold"
                                                style="font-size: 1.2rem; color: #0A3D62;">
                                                When you work with WB-Digitech you have a digital partner, not a service
                                                provider.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Let's Create Section - EXACT content -->
                                <div class="row my-5">
                                    <div class="col-12">
                                        <div class="border-top pt-5"></div>
                                    </div>
                                    <div class="col-lg-10 mx-auto">
                                        <div class="p-5 text-white rounded-5"
                                            style=" box-shadow: 0 30px 60px rgba(10, 61, 98, 0.4);">
                                            <h3 class="fw-bold mb-4 text-center" style="font-size: 2rem;">Let's Create
                                                Digital Masterpieces Together</h3>
                                            <p class="text-center mb-4" style="font-size: 1.2rem; opacity: 0.95;">
                                                Whether you are to create a new brand identity or to grow your present
                                                digital footprint, WB-Digitech is here to help.
                                            </p>
                                            <p class="text-center mb-4 fst-italic" style="font-size: 1.3rem;">
                                                Let's connect and turn your vision into reality.
                                            </p>

                                            <div class="row text-center mt-5">
                                                <div class="col-md-4 mb-3">
                                                    <i class="bi bi-geo-alt-fill" style="font-size: 1.5rem;"></i>
                                                    <p class="mb-0 mt-2 fw-bold">Dubai, UAE</p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <i class="bi bi-telephone-fill" style="font-size: 1.5rem;"></i>
                                                    <p class="mb-0 mt-2">+971 50 239 0775</p>
                                                    <p class="mb-0">+971 50 341 6284</p>
                                                    <p class="mb-0">+971-4-255-9928</p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <i class="bi bi-envelope-fill" style="font-size: 1.5rem;"></i>
                                                    <p class="mb-0 mt-2">info@wbdigitech.ae</p>
                                                    <p class="mb-0">www.wbdigitech.ae</p>
                                                </div>
                                            </div>

                                            <div class="text-center mt-4">
                                                <a href="{{ route('contact') }}" class="btn px-5 py-3 rounded-pill fw-bold"
                                                    style="color: #fff; background: linear-gradient(90deg, #0A3D62 0%, #0077B6 100%);">Get
                                                    a Free Quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Team Members Section (UNCHANGED) --}}
                                <div class="tp-team-area pt-5 pb-5 fix">
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-md-8 text-center">
                                            <h2 class="fw-bold" style="color: #0A3D62; font-size: 2.5rem;">Our Team</h2>
                                            <p class="text-muted mt-2" style="font-size: 1.2rem;">
                                                @if($teamMembers->count() > 0)
                                                    Meet With Our Team
                                                @else
                                                    Coming Soon !
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            @foreach($teamMembers as $member)
                                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                                    <div class="team-card text-center p-3"
                                                        style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                                        <div class="team-img mb-3">
                                                            <img src="{{ asset('storage/' . $member->image) }}"
                                                                alt="{{ $member->name }}"
                                                                style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #0A3D62;">
                                                        </div>
                                                        <div class="team-info">
                                                            <h4 class="fw-bold" style="color: #0A3D62;">{{ $member->name }}</h4>
                                                            <p class="text-muted">{{ $member->speciality }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Fun Facts Section (Polished) -->
                                <div class="ab-funfact-area pb-5 mt-4">
                                    <div class="container container-1480">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4">
                                                <div class="ab-funfact-title-box">
                                                    <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 mb-3"
                                                        style="font-size: 1rem;">Our Facts</span>
                                                    <h4 class="fw-bold" style="color: #0A3D62; font-size: 2.2rem;">Agency
                                                        <br>Snapshots
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="ab-funfact-wrap">
                                                    <div class="row g-4">
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="p-4 bg-light rounded-4 text-center">
                                                                <span class="display-4 fw-bold"
                                                                    style="color: #0A3D62;">50+</span>
                                                                <p class="mt-2 fw-semibold">PROJECTS COMPLETED</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="p-4 bg-light rounded-4 text-center">
                                                                <span class="display-4 fw-bold"
                                                                    style="color: #0A3D62;">5+</span>
                                                                <p class="mt-2 fw-semibold">YEARS OF EXPERIENCE</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="p-4 bg-light rounded-4 text-center">
                                                                <span class="display-4 fw-bold"
                                                                    style="color: #0A3D62;">21+</span>
                                                                <p class="mt-2 fw-semibold">TEAM MEMBERS</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="p-4 bg-light rounded-4 text-center">
                                                                <span class="display-4 fw-bold"
                                                                    style="color: #0A3D62;">100%</span>
                                                                <p class="mt-2 fw-semibold">GROWING AGENCY</p>
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
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection