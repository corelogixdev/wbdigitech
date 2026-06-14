@extends('layouts.homelayout')

@section('title', 'Leaflet Designs That Grab Instant Attention | WB-Digitech')
@section('meta_description', 'Looking for a leaflet design service in Dubai? Our leaflet design experts create eye-catching, high-impact leaflet designs that help your brand grow.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/graphic_design/leaflet.webp" 
            title="Where Leaflet Design Meets Real Attention"
            description="Sometimes, digital ads get skipped, emails go unopened, but a well-crafted leaflet still works. It gets picked up, gets read, and it stays around longer than most people expect."
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
                        <li><a href="{{ route('services.logo_design') }}">Logo Design</a></li>
                        <li class="current-menu-item"><a href="{{ route('services.leaflet_design') }}">Leaflet Design</a>
                        </li>
                        <li><a href="{{ route('services.brochure_design') }}">Brochure Design</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="Why Businesses Still Rely on Leaflet Design Experts">
<p>Leaflets work because they are tangible and feel real. People trust what they can hold.</p>
<p>Working with experienced leaflet design experts means your message is structured properly, not cluttered,
                    and never confusing. Fonts are chosen carefully, colors are balanced, and space is respected.</p>
<p>Some designs are created quickly and forgotten just as quickly. Others are remembered, and we focus on
                    the second kind. And yes, a good leaflet design still converts when it is done right.</p>

</x-service-content-card>

<x-service-content-card title="Our Approach to Company Leaflet Design">
<p>Every business has a story, even if it feels simple. Our company leaflet design process starts with
                    understanding what you want to say and who you want to reach.</p>
<p>We do not jump straight into visuals. Strategy comes first, even if it sounds boring, and then creativity
                    steps in.</p>
<p>We also adapt designs for multiple uses. Events, door-to-door distribution, retail counters, and
                    exhibitions. A company leaflet design should not feel limited to one moment.</p>

</x-service-content-card>

<x-service-content-card title="Designed for Brands Across Leaflet Dubai Markets">
<p>Dubai is fast, competitive, and visually demanding. Creating leaflets for the leaflet Dubai market
                    requires cultural awareness and sharp design instincts.</p>
<p>Our experience across different industries helps brands stand out without looking out of place. That
                    balance matters in leaflet Dubai campaigns.</p>

</x-service-content-card>

<x-service-content-card title="Custom Designs, Not Templates">
<p>Templates are easy, while results are not. We do not recycle layouts or reuse concepts. Each leaflet
                    design starts fresh.</p>
<p>Our leaflet design experts understand how layout guides the eye. Headlines attract attention. White space
                    allows breathing room. Images support the message instead of distracting from it.</p>
<p>This is not an accidental design. It is intentional.</p>

</x-service-content-card>

<x-service-content-card title="Flexible Options Including Leaflet Design Online">
<p>Some clients prefer quick turnarounds. Others want full collaboration.</p>
<p>We offer leaflet design online solutions that allow feedback, revisions, and approvals without delays.
                    Simple, efficient, and surprisingly personal.</p>
<p>Distance does not reduce quality. Process matters more than location.</p>

</x-service-content-card>

<x-service-content-card title="More Than Just Leaflets">
<p>Many clients who start with leaflets later ask for branding support.</p>
<p>If needed, our logo design experts can align your leaflet visuals with your existing or new brand
                    identity. Consistency builds trust.</p>
<p>You may also work directly with an experienced graphic designer in Dubai who understands both creative
                    design and commercial goals.</p>
<p>And yes, the same graphic designer in Dubai can support future campaigns as your brand grows.</p>
<div class="hero-btns mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">See Sample Leaflet Designs</a>
                </div>
<br>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What makes your leaflet design service different?', 'answer' => '<p>Our leaflet design service focuses on strategy before visuals. Design decisions are based on audience
                    behavior, not trends alone.</p>'],
    ['question' => 'Do you only work with businesses in Dubai?', 'answer' => '<p>No. While many clients come from Dubai, we also work with regional and international brands.</p>'],
    ['question' => 'Can you handle urgent leaflet projects?', 'answer' => '<p>Yes, depending on the scope. Our leaflet design service includes flexible timelines without sacrificing
                    quality or originality.</p>'],
    ['question' => 'What industries do you design leaflets for?', 'answer' => '<p>Retail, real estate, healthcare, hospitality, education, and corporate services.</p>'],
    ['question' => 'Will the design be print-ready?', 'answer' => '<p>Absolutely, every leaflet is delivered in print-ready formats, with proper bleed, margins, and color
                    settings.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection