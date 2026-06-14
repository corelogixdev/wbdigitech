@extends('layouts.homelayout')

@section('title', 'Amazon Marketing That Boosts Sales Fast | WB-Digitech')

@section('meta')
    <meta name="description"
        content="Grow faster on Amazon with a results-driven approach. From strategy to visibility, our Amazon marketing service helps brands scale smarter and sell more.">
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/google_ads/amazon_marketing.webp" 
            title="Amazon Marketing That Feels Less Robotic and More Profitable"
            description="Selling on Amazon looks simple until it isn’t. One product turns into ten competitors overnight. Rankings slip, Ads burn money. This is where Amazon marketing stops being optional and starts becoming essential. We work inside the marketplace, not around it. Listings, ads, visibility, growth. All of it matters. Our Amazon marketing service is designed to adapt, change pace, and push when needed. Sometimes slow and steady. Sometimes aggressive. That is how Amazon actually works. If you are searching for clarity, not just clicks, you are in the right place."
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
                        <li class="current-menu-item"><a href="{{ route('services.amazon_marketing') }}">Amazon
                                Marketing</a></li>
                        <li><a href="{{ route('services.ppc') }}">PPC (Pay-Per-Click)</a></li>
                        <li><a href="{{ route('services.google_shopping_ads') }}">Google Shopping Ads</a></li>
                        <li><a href="{{ route('services.lead_generation') }}">Lead Generation</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="content-col">

<x-service-content-card title="Why Amazon Marketing Is Not Just Ads Anymore">
<p>
                    Most sellers think ads solve everything. In reality, Ads amplify what already exists. A smart Amazon
                    marketing strategy begins before advertising even starts. It includes listings, Keywords, Competitors,
                    and brand positioning. Some of this is an active effort. Some of it happens quietly in the background.
                </p>
<p>
                    As a digital marketing agency in Dubai, we see brands jump in too fast. Then they wonder why conversions
                    stay low. With the right structure, Amazon marketing becomes predictable instead of stressful.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Book a free Amazon growth review</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Our Amazon Marketing Service Approach">
<p>
                    Every brand enters Amazon differently; some need traction while others need control. At WB, our Amazon
                    marketing service blends creative decisions with performance thinking. You get structure, but not
                    rigidity.
                </p>
<h4>What We Actually Focus On</h4>
<ul>
                    <li>Product visibility inside the amazon marketing platform</li>
                    <li>Listing optimization through amazon SEO</li>
                    <li>Smart ad placements on the amazon advertising platform</li>
                    <li>Data-backed decisions that support long-term online marketing goals</li>
                </ul>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Talk to an Amazon strategist</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Strategy First, Execution Second">
<p>
                    A proper Amazon marketing strategy does not chase trends, but it builds leverage. We study buyer intent,
                    then the algorithm. Then the gaps competitors miss. This approach supports amazon product markering that
                    feels natural, not forced. Execution happens in phases. Some are aggressive, while others are cautious.
                </p>

</x-service-content-card>

<x-service-content-card title="SEO That Works Inside Amazon">
<p>
                    Amazon SEO is not Google SEO. It behaves differently. It rewards clarity, relevance, and consistency. We
                    optimize titles, bullets, backend terms, and content flow. The goal is visibility without sacrificing
                    readability. One Amazon SEO service can change how your product shows up entirely. This part often works
                    quietly. Rankings rise while ads spending is less. That is the sweet spot.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Request a listing audit</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Advertising Without Guesswork">
<p>
                    Running ads blindly is expensive. We manage ads across the Amazon Advertising Platform with constant
                    refinement. Keyword intent shifts, bids adjust, and campaigns evolve. Our approach to Amazon advertising
                    services focuses on efficiency first, scale second. Growth should feel controlled, not chaotic.
                </p>

</x-service-content-card>

<x-service-content-card title="More Than Just a Vendor">
<p>
                    We are not just another Amazon Marketing Services agency offering dashboards and reports. We think like
                    sellers. We act like partners. This is not a one-size solution. It is a focused Amazon marketing service
                    that adapts as your catalog grows.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Start with a pilot campaign</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Ready to Grow Smarter on Amazon?">
<p>
                    Growth on Amazon is rarely linear. It loops, pauses, then accelerates again. If you want a grounded
                    approach to Amazon marketing that adapts instead of overpromising, let’s talk. One conversation can
                    clarify a lot.
                </p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What does Amazon marketing include?', 'answer' => '<p>
                    It includes strategy, listings, amazon SEO, advertising, and performance optimization. The mix depends
                    on where your brand currently stands and where it needs to go.
                </p>'],
    ['question' => 'How is an Amazon marketing service different from running ads myself?', 'answer' => '<p>
                    Running ads is one part. A complete Amazon marketing service looks at conversions, rankings, and
                    long-term visibility, not just traffic.
                </p>'],
    ['question' => 'Do you offer full amazon marketing services?', 'answer' => '<p>
                    Yes, but selectively. We focus on brands that want sustainable growth, not quick spikes.
                </p>'],
    ['question' => 'How long does an Amazon marketing strategy take to show results?', 'answer' => '<p>
                    Some results appear within weeks, especially with amazon SEO improvements. Others take time as data
                    compounds and listings mature.
                </p>'],
    ['question' => 'Is Amazon advertising necessary for amazon product marketing?', 'answer' => '<p>
                    Not always at the start, but eventually yes. Advertising supports visibility while organic traction
                    builds through Amazon marketing fundamentals.
                </p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection