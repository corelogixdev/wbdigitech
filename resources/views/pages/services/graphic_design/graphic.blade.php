@extends('layouts.homelayout')

@section('title', 'Creative Graphic Design That Captivates | WB-Digitech')
@section('meta_description', 'Looking for a graphic design agency in Dubai? WB Digitech offers custom graphic design services that help brands stand out, connect, and grow visually.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/graphic_design/brochure.webp" 
            title="Graphic Design Agency Dubai That Builds Brands Visually"
            description="Design is not only what people see. It is what they feel when they look at your brand. At WB Digitech, we work as a graphic design agency that understands how visuals quietly influence decisions. Sometimes fast, sometimes slow, but always with intent."
            serviceCategory="Graphic Design"
            serviceName="Graphic Design"
        >
        </x-service-hero>

        <!-- Content & Sidebar -->
        <div class="container-flex">

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div class="sidebar">
                    <h6>Our Services</h6>
                    <ul>
                        <li class="current-menu-item"><a href="{{ route('services.graphic') }}">Graphic Design</a></li>
                        <li><a href="{{ route('services.logo_design') }}">Logo Design</a></li>
                        <li><a href="{{ route('services.leaflet_design') }}">Leaflet Design</a></li>
                        <li><a href="{{ route('services.brochure_design') }}">Brochure Design</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="Why Choose Our Graphic Design Services">
<p>There are many options when searching for graphic design near me, but not every agency listens carefully.
                    At WB, our graphic design services are built around your business needs, not trends alone. We research,
                    and then we design.</p>
<p>What makes us different as a graphic design agency is our ability to jump between creative freedom and
                    structured brand thinking without losing consistency.</p>

</x-service-content-card>

<x-service-content-card title="Designs that align with your business goals">
<p>Flexible design processes that allow exploration</p>
<p>Visuals created for digital and print use</p>
<p>Long term brand thinking, not quick fixes</p>
<p><strong>👉 Talk to a creative strategist before starting your next project.</strong></p>

</x-service-content-card>

<x-service-content-card title="Graphic Design Agency Dubai Focused on Brand Identity">
<h3>Branding That Feels Natural</h3>
<p>As a graphic design agency Dubai, we believe branding should not feel forced. Logos, typography, colors,
                    and layouts must connect naturally. Sometimes bold, and sometimes subtle, according to the requirements
                    of the specific page.</p>
<p>A strong brand identity is often built quietly over time. We help you do exactly that.</p>
<h3>Visual Communication That Works</h3>
<p>Being a graphic design company in Dubai means understanding local markets while designing for global
                    reach. Cultural awareness plays a role. So does simplicity. Our visuals speak clearly. Even when they
                    say very little.</p>

</x-service-content-card>

<x-service-content-card title="Full Service in the Field of Graphic Design">
<p>We offer a complete set of graphic design solutions that your business needs to be consistent in its
                    visuals.</p>
<p>Logo Design and Brand Identity Systems</p>
<p>Social Media Creatives &amp; Ad Visuals</p>
<p>Marketing Brochures, Flyers, &amp; Catalogs</p>
<p>Website and UI visual assets</p>
<p>Presentation and corporate design</p>
<p>We also integrate digital design services when brands need more than static visuals. Digital-first
                    thinking matters now more than ever.</p>

</x-service-content-card>

<x-service-content-card title="Graphic Design Company in Dubai That Understands Business">
<p>Being a graphic design company in Dubai is not only about design skills. It is about understanding
                    business pressure, deadlines, and expectations.</p>
<p>Some clients come after working with a freelance graphic designer. Others want a full agency team. We
                    support both journeys.</p>
<p>If you searched for graphic designers near me, chances are you want quick communication and
                    accountability. That is exactly what we offer.</p>

</x-service-content-card>

<x-service-content-card title="Locally Focused yet Scalable Graphic Design Agency">
<p>Many people search for graphic designs near me as location is an important factor. We agree. Knowledge of
                    the area is very helpful.</p>
<p>In the context of an overall digital marketing agency, the designs we do will factor in the marketing
                    effort as well as the desired results.</p>
<p>In addition, we work closely together with our team of web developers so that your design is seamlessly
                    translated into a digital experience.</p>

</x-service-content-card>

<x-service-content-card title="Graphic Design Agency That Grows With You">
<p>Design is not a one-time task. Brands evolve, markets shift, and sometimes visuals need adjustment.</p>
<p>Whether you are scaling digitally, launching something new, or refining what already exists, our graphic
                    design services remain flexible.</p>
<p>In the end, a reliable graphic design agency Dubai businesses trust grows alongside them. That is what we
                    aim for.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'Graphic design firms: What exactly do they do?', 'answer' => '<p>The graphic design company can create graphic assets that symbolically represent your brand. The
                    branding, marketing imagery, and UI assets of the graphic assets are developed with the objectives of
                    the business.</p>'],
    ['question' => 'How are graphic design services different from hiring a freelance graphic designer?', 'answer' => '<p>As an independent graphic designer, he or she would work alone, while the graphic design services of the
                    agency provide team working, consistency, and an overall support mechanism.</p>'],
    ['question' => 'Why choose a graphic design company in Dubai?', 'answer' => '<p>A graphic design firm in Dubai taps into the regional market trends and at the same time provides
                    visually competitive elements at an international level.</p>'],
    ['question' => 'Does graphic design contribute to digital marketing?', 'answer' => '<p>Yes. As a digital marketing agency, design would help in supporting marketing activities, advertisements,
                    and messages.</p>'],
    ['question' => 'Do you offer design support for websites?', 'answer' => '<p>Absolutely. We collaborate closely with our web development company to ensure designs are functional,
                    responsive, and visually consistent across platforms.</p>
<div class="hero-btns mt-4">
                    <a href="{{ route(\'contact\') }}" class="btn btn-gradient">Start your design journey with WB Digitech
                        today.</a>
                </div>
<br>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection