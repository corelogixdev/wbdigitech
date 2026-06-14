@extends('layouts.homelayout')

@section('title', 'PPC Agency in Dubai | Results-Driven Pay Per Click Advertising')

@section('meta')
    <meta name="description"
        content="Looking for a reliable PPC agency in Dubai? WB Digitech helps brands grow faster with smart targeting, high-converting ads, and data-led strategies.">
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/google_ads/pay_per_click.webp" 
            title="Results-Driven PPC That Actually Converts"
            description="Choosing a PPC agency in Dubai should feel simple. Paid ads look easy from the outside. A few keywords, a budget, some clicks. But behind the scenes, things get messy quickly. Costs rise, leads drop, and results feel unpredictable. That is usually when businesses start searching for a PPC company in Dubai that actually understands the market, the platforms, and the people clicking those ads."
            serviceCategory="Google Ads"
            serviceName="Google Ads"
        >
        </x-service-hero>
        <!-- Content & Sidebar -->
        <div class="container-flex">

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div class="sidebar">
                    <h6>Our Services</h6>
                    <ul>
                        <li><a href="{{ route('services.google_ads_management') }}">Google Ads Management</a></li>
                        <li><a href="{{ route('services.amazon_marketing') }}">Amazon Marketing</a></li>
                        <li class="current-menu-item"><a href="{{ route('services.ppc') }}">PPC (Pay-Per-Click)</a></li>
                        <li><a href="{{ route('services.google_shopping_ads') }}">Google Shopping Ads</a></li>
                        <li><a href="{{ route('services.lead_generation') }}">Lead Generation</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="content-col">

<x-service-content-card title="PPC Agency in Dubai That Thinks Beyond Clicks">
<p>A lot of agencies promise leads, but fewer focus on quality. As a performance-driven PPC agency in Dubai,
                    the approach stays grounded in numbers but never forgets the human behind the screen. Ads are written to
                    sound natural. Targeting is refined constantly. Budgets are protected. Sometimes results come fast.
                    Sometimes they take refinement. Both are handled with clarity.</p>
<p>We work with startups, established brands, and companies trying to fix campaigns that never quite worked
                    before. And yes, mistakes are corrected along the way. That is part of the process.</p>

</x-service-content-card>

<x-service-content-card title="What Makes Our PPC Approach Different">
<h3>Strategy Comes First</h3>
<p>Every campaign begins with intent. Goals are properly defined early, and platforms are chosen carefully.
                    Google Ads is often the focus, but not always.</p>
<h3>Data Is Closely Monitored</h3>
<p>Clicks are reviewed, costs are analyzed, and conversion paths are improved. Some decisions are made
                    quickly, others after observation.</p>
<h3>Execution Is Consistent</h3>
<p>This is where many campaigns fail. Ours are monitored, tweaked, and improved continually through
                    structured ppc managed services.</p>

</x-service-content-card>

<x-service-content-card title="Full-Scale PPC Campaign Management">
<p>As a growing PPC company in Dubai, we offer complete campaign ownership from setup to optimization. Our
                    PPC management services Dubai include keyword research, ad copywriting, bidding strategy, conversion
                    tracking, and performance reporting. Nothing is handed off halfway. Nothing is ignored. We also provide
                    PPC managed services for brands that already have campaigns but need better control, clearer insights,
                    or stronger ROI.</p>

</x-service-content-card>

<x-service-content-card title="Platforms We Work With">
<p>Google Ads leads the way. But it is not the only option. Search ads, display ads, remarketing, shopping
                    campaigns, and YouTube advertising are all part of the mix. Depending on your audience, the strategy may
                    shift. That flexibility matters. This is why businesses looking for a PPC company Dubai often stay
                    long-term once they see consistent improvement.</p>

</x-service-content-card>

<x-service-content-card title="Why Businesses Choose WB Digitech">
<p>There are many options when searching for the best PPC agency in Dubai. What sets us apart is not one
                    feature. It is how everything fits together. With clear communication, transparent reporting, and real
                    conversations about performance, campaigns are managed properly. As a trusted PPC advertising company
                    Dubai, we stay focused on what actually moves revenue.</p>

</x-service-content-card>

<x-service-content-card title="When PPC Starts Making Sense Again">
<p>Paid ads should feel exciting, not stressful. When done right, PPC becomes predictable in which costs
                    stabilize, leads improve, and decisions get easier. Whether you are looking for a long-term PPC service
                    in Dubai or need help fixing underperforming ads, this is where clarity begins. WB Digitech operates as
                    a focused PPC services company with one priority: making your ad spend work harder. And yes, we are also
                    a results-oriented PPC marketing company that understands how fast Dubai’s digital market moves.</p>
<div class="hero-btns mt-4">
                    <a href="{{ route('contact')}}" class="btn btn-gradient">Launch Your PPC Campaign</a>
                </div>
<br>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What does a PPC agency in Dubai actually do?', 'answer' => '<p>A PPC agency in Dubai manages paid advertising campaigns across platforms like Google Ads. This includes
                    keyword selection, bid management, ad creation, and continuous optimization. With professional PPC
                    management services Dubai, campaigns are monitored daily to improve performance and reduce wasted spend.
                </p>'],
    ['question' => 'How is WB Digitech different from other PPC companies?', 'answer' => '<p>Unlike many agencies, WB Digitech operates as a strategic PPC company in Dubai rather than just an
                    execution partner. We focus on long-term performance, not short-term spikes, using structured PPC
                    managed services and transparent reporting.</p>'],
    ['question' => 'Is PPC suitable for small businesses in Dubai?', 'answer' => '<p>Yes. When managed correctly by a skilled PPC company, PPC can scale based on budget. Even smaller
                    campaigns can generate consistent leads if targeting and messaging are done right.</p>'],
    ['question' => 'How long does it take to see results from PPC?', 'answer' => '<p>Some results appear quickly, often within days. Sustainable growth usually takes a few weeks of
                    optimization. A professional PPC agency in Dubai will explain this clearly and set realistic
                    expectations.</p>'],
    ['question' => 'Do you offer full PPC services in Dubai?', 'answer' => '<p>Yes. We provide end-to-end PPC services Dubai, including setup, optimization, tracking, and reporting.
                    Businesses working with our PPC company in Dubai receive full campaign ownership and ongoing support.
                </p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection