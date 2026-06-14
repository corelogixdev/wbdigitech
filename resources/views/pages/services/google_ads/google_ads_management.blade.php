@extends('layouts.homelayout')

@section('title', 'Google Ads Management That Drives ROI | WB-Digitech')

@section('meta_description', 'Max out on your conversions at the lowest ad spend with the help of our Google Ads management. At WB-Digitech we put together targeted campaigns which get you clicks, calls and customers.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/google_ads/google_ads_marketing.webp" 
            title="A Performance-First Approach to Google Ads Management"
            description="Paid traffic sounds simple. Launch ads, get clicks, watch leads roll in. Except it rarely works that way. A campaign can look active and still do nothing. The budget gets spent, reports look busy, while growth stays flat. That is why choosing the right Google Ads Agency matters more than most businesses realize. At WB, we manage intent, timing, and pressure. Sometimes aggressively and sometimes patiently. As a digital marketing agency in Dubai, we see this pattern often. Ads are running, but direction is missing."
            serviceCategory="Google Ads"
            serviceName="Google Ads"
        >
        </x-service-hero>

        <br><br>

        <!-- Content & Sidebar -->
        <div class="container-flex">

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div class="sidebar">
                    <h6>Our Services</h6>
                    <ul>
                        <li class="current-menu-item"><a href="{{ route('services.google_ads_management') }}">Google Ads
                                Management</a></li>
                        <li><a href="{{ route('services.amazon_marketing') }}">Amazon Marketing</a></li>
                        <li><a href="{{ route('services.ppc') }}">PPC (Pay-Per-Click)</a></li>
                        <li><a href="{{ route('services.google_shopping_ads') }}">Google Shopping Ads</a></li>
                        <li><a href="{{ route('services.lead_generation') }}">Lead Generation</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="content-col">

<x-service-content-card title="How a Google Ads Agency Should Actually Think">
<p>
                    A proper campaign starts with understanding user behavior, not just keywords. Search intent shifts.
                    Competition reacts. Your ads need to move with it. Some changes are immediate. Others sit quietly until
                    the data proves something new.
                </p>
<p>
                    This is where a structured google ads management agency approach makes the difference. Strategy comes
                    first. Execution follows. Then refinement begins again.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Speak with a PPC strategist today</a>
                </div>

</x-service-content-card>

<x-service-content-card title="What Our Google Ads Management Really Covers">
<p>
                    We do more than launch campaigns and adjust bids. Our google ads management agency process focuses on
                    clarity. Account structure, keyword intent, ad relevance, landing page alignment. Every piece supports
                    the next.
                </p>
<ul>
                    <li>Search and display campaigns</li>
                    <li>Conversion tracking and goal setup</li>
                    <li>Continuous optimization, not set-and-forget</li>
                    <li>Reporting that actually explains what changed</li>
                </ul>
<p>
                    Some decisions are data-led. Others come from experience. Both matter.
                </p>

</x-service-content-card>

<x-service-content-card title="Local Insight, Global Standards">
<p>
                    Running ads in competitive markets requires nuance. Especially in places like google ads dubai, where
                    cost per click can change quickly.
                </p>
<p>
                    We are not just another google ads company following templates. We adapt to industries, seasons, and
                    shifting demand. If you ever searched for a google ads agency near me, you were probably looking for
                    accountability more than proximity. That is what we provide.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Request a custom PPC plan</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Strategy, Then Scaling">
<p>
                    Scaling too early breaks accounts and scaling too late stalls growth. Our campaigns grow in stages;
                    initial testing, signals are closely monitored, then do we push harder. This balance is why businesses
                    trust a google ads services agency instead of relying on automation alone.
                </p>
<p>
                    We are often compared to a google ads marketing agency, but our work leans deeper into performance
                    control than surface-level promotion.
                </p>

</x-service-content-card>

<x-service-content-card title="Why Clients Stay">
<p>
                    They stay because numbers make sense. Clicks turn into conversations. Spend aligns with revenue. Our
                    google ads management agency model is built around long-term efficiency, not short bursts of traffic.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Start with us today</a>
                </div>

</x-service-content-card>

<x-service-content-card title="Ready to Stop Guessing With Ads?">
<p>
                    Paid search should feel controlled, not stressful. If you want clarity, accountability, and performance
                    that improves over time, work with us at WB that treats your budget like its own.
                </p>
<div class="hero-btns my-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient">Book your Google Ads consultation today</a>
                </div>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What does a Google Ads management agency actually manage?', 'answer' => '<p>
                    It manages everything that influences paid performance. Keywords, bids, ad copy, targeting, conversions,
                    and ongoing optimization. A strong Google Ads management agency also manages what not to spend on.
                </p>'],
    ['question' => 'How is working with a Google Ads Agency different from running ads myself?', 'answer' => '<p>
                    A Google Ads Agency brings structure, testing discipline, and cost control. You may get clicks alone,
                    but strategy is what turns them into customers.
                </p>'],
    ['question' => 'Do you work with small businesses or only large brands?', 'answer' => '<p>
                    Both. The approach changes, not the standards. Campaigns are scaled based on goals and budget reality.
                </p>'],
    ['question' => 'How soon can results be expected?', 'answer' => '<p>
                    Some improvements show within weeks. Consistent growth takes longer as data stabilizes and optimization
                    compounds.
                </p>'],
    ['question' => 'Is Google Ads better than other online channels?', 'answer' => '<p>
                    It depends on intent. When users are actively searching, Google Ads often performs better than passive
                    platforms.
                </p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection