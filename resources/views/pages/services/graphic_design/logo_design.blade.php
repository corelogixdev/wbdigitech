@extends('layouts.homelayout')

@section('title', 'Logo Design Agency UAE | Custom Logo Design Dubai')
@section('meta_description', 'Work with a logo design agency UAE brands trust for clarity, strategy, and timeless design. Custom logo design Dubai services built to grow with your brand.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/graphic_design/logo.webp" 
            title="Logo Design That Feels Right, Looks Sharp, and Actually Works"
            description="Your logo is not just a graphic; it is a feeling, a signal, sometimes the only thing people remember. At WB DigiTech, we work as a logo design agency that understands how brands grow, stall, and then grow again. We design for all of that."
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
                        <li><a href="{{ route('services.graphic') }}">Graphic Design</a></li>
                        <li class="current-menu-item"><a href="{{ route('services.logo_design') }}">Logo Design</a></li>
                        <li><a href="{{ route('services.leaflet_design') }}">Leaflet Design</a></li>
                        <li><a href="{{ route('services.brochure_design') }}">Brochure Design</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="A Logo Design Agency That Thinks Beyond Looks">
<p>We are often asked what makes us different as a logo design agency. The honest answer is that we do not
                    chase trends blindly. Some styles fade fast, others stay longer. We focus on balance.</p>
<p>You get designers who ask uncomfortable but useful questions. Why this color? Why now? Who are you trying
                    to convince? The work is done carefully, but never stiffly; it stays human.</p>
<p>Being based in the UAE gives us an edge. The market here is fast, visual, and competitive. Our logo
                    design UAE approach reflects that reality without overcomplicating things.</p>

</x-service-content-card>

<x-service-content-card title="Logo Design UAE for Brands at Every Stage">
<p>Some brands are just starting. Some are rebranding after years of growth. Others simply need refinement.
                    Our logo design UAE solutions adapt, not copy and paste.</p>
<p>We design logos that work across screens, signage, packaging, and print. A logo that looks good only on a
                    website is incomplete. That detail matters, even if it is noticed later.</p>
<p>Occasionally, we circle back to an early sketch. Good ideas do not always appear first.</p>

</x-service-content-card>

<x-service-content-card title="Logo Design Service Built Around Strategy and Instinct">
<p>Our logo design service blends structure with creative instinct. Research is done, yes. But we also trust
                    experience.</p>
<p>You receive multiple concepts. Feedback is welcome, not rushed. Revisions are handled properly. No
                    generic templates pretending to be custom work.</p>
<p>And while we care deeply about visuals, we also think about how your logo fits within your larger brand
                    system.</p>

</x-service-content-card>

<x-service-content-card title="Logo Design Dubai Brands Trust for Clarity">
<p>Working with logo design Dubai businesses has taught us something important. Clarity beats cleverness
                    most of the time.</p>
<p>We collaborate with startups, SMEs, and established companies across industries. Fashion, tech, real
                    estate, hospitality, and more. Each project feels different. That is intentional.</p>

</x-service-content-card>

<x-service-content-card title="Logo Design Agency Dubai Companies Rely On">
<p>As a logo design agency Dubai businesses return to, we focus on relationships, not just files delivered.
                </p>
<p>Discovery. Sketching. Digital refinement. Presentation. Revision. Delivery. Simple, but never rushed. A
                    good logo earns trust quietly.</p>

</x-service-content-card>

<x-service-content-card title="Custom Logo Design Dubai Without the Overthinking">
<p>Our custom logo design Dubai work is not about complexity for the sake of it. Some of the strongest logos
                    are also the simplest.</p>
<p>You get originality, not recycled concepts. Each design is crafted to match your brand personality, not
                    the designer’s ego.</p>

</x-service-content-card>

<x-service-content-card title="Company Logo Design Services That Support Growth">
<p>Our company logo design services are created with long-term use in mind. Logos should scale with your
                    business, not limit it.</p>

</x-service-content-card>

<x-service-content-card title="A Custom Logo Design Agency That Collaborates">
<p>As a custom logo design agency, collaboration is central to how we work.</p>

</x-service-content-card>

<x-service-content-card title="More Than Logos, We Build Visual Foundations">
<p>Logo design is often the starting point. Many clients continue with us as a graphic design company,
                    expanding their brand visuals across platforms.</p>

</x-service-content-card>

<x-service-content-card title="Why Brands Choose WB DigiTech">
<p>Strategic, not rushed design decisions</p>
<p>Market awareness across UAE industries</p>
<p>Clear communication without jargon</p>
<p>Flexible revisions and honest feedback</p>
<p>Support beyond just logo delivery</p>

</x-service-content-card>

<x-service-content-card title="Ready to Create a Logo That Represents You?">
<p>If your brand feels unclear, outdated, or simply unfinished, it might be time. Work with a logo design
                    agency that understands both creativity and business.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What makes your logo design agency different?', 'answer' => '<p>As a logo design agency, we combine strategy with creativity. We focus on understanding your brand before
                    designing anything.</p>'],
    ['question' => 'Do you offer logo design services across the UAE?', 'answer' => '<p>Yes, our logo design UAE services support businesses in Dubai and beyond.</p>'],
    ['question' => 'How long does a custom logo design take?', 'answer' => '<p>A typical custom logo design Dubai project takes between one to three weeks.</p>'],
    ['question' => 'Can you redesign an existing logo?', 'answer' => '<p>Absolutely. Many logo design Dubai clients approach us for rebranding or refinement.</p>'],
    ['question' => 'Do you offer branding beyond logos?', 'answer' => '<p>Yes. We often work as a graphic design company and collaborate closely with our digital marketing agency
                    services.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection