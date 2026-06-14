@extends('layouts.homelayout')

@section('title', 'Lead Generation Agency Dubai | ROI-Focused Lead Generation Company')
@section('meta_description', 'WB Digitech is a leading in the field of lead generation in Dubai which we at WB Digitech help out businesses to get that quality lead in Dubai through the use of data driven strategies and proven systems.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/google_ads/lead_gen.jpg" 
            title="Lead Generation Agency Dubai That Delivers Qualified Leads"
            description="Finding out the right customers is what grows businesses the most. As a lead generation agency in Dubai at WB Digitech, we help brands we work with to attract, capture, and close in on high quality leads which turn into business opportunities. We put it out there that we are a performance oriented lead generation company which delivers results, not just any old traffic."
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
                        <li><a href="{{ route('services.ppc') }}">PPC (Pay-Per-Click)</a></li>
                        <li><a href="{{ route('services.google_shopping_ads') }}">Google Shopping
                                Ads</a></li>
                        <li class="current-menu-item"><a href="{{ route('services.lead_generation') }}">Lead Generation</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="Trusted Lead Generation Company for Scalable Growth">
<p>Choosing a lead generation company to work with has a great impact on your sales pipeline. We take our
                    basic campaigns a step further by using data, automation, and market research. As a reliable lead gen
                    companies in the area we put marketing and sales at the table together to see that each and every lead
                    we present is a good fit.</p>
<p>From small startups to large scale companies we have designed our lead generation agency in Dubai
                    solutions to grow with your business.</p>

</x-service-content-card>

<x-service-content-card title="Our Lead Generation Services">
<p><strong>B2B &amp; B2C Lead Generation</strong><br>
                    We develop campaigns that target decision makers and ready to buy customers which in turn produces a
                    constant stream of qualified leads.</p>
<p><strong>Performance-Based Campaigns</strong><br>
                    We have looked at what successful models pay per lead generation companies have developed which is in
                    large part a focus on cost efficiency and quality of leads which in turn do not include what we may term
                    as vanity metrics.</p>
<p><strong>Sales Funnel Optimization</strong><br>
                    We focus on design of landing pages, forms, and follow up strategies to improve results and return on
                    investment.</p>
<p><strong>Dedicated Lead Experts</strong><br>
                    Each project is managed by a dedicated lead generation specialist who also fine tunes targeting and
                    improves lead quality as we go along.</p>

</x-service-content-card>

<x-service-content-card title="Why WB Digitech Is a Preferred Lead Gen Partner">
<p>As a leading transparent and results oriented lead generation agency in Dubai.</p>
<p>Data-driven targeting and audience research</p>
<p>Industry-specific lead strategies</p>
<p>Conversion-focused funnels and messaging</p>
<p>Real-time reporting and optimization</p>
<p>Support of skilled lead generation specialists.</p>
<p>Lead gen companies which we do business with count on us for consistency and accountability.</p>

</x-service-content-card>

<x-service-content-card title="Lead Generation for the Dubai Market">
<p>In Dubai you require local market knowledge. We look at audience behavior, industry demand, and buy
                    intent to put your campaigns in front of the right people at the right time.</p>
<p>For us whether you are a service provider, real estate firm, or eCommerce brand we have a solution.</p>

</x-service-content-card>

<x-service-content-card title="Flexible Engagement Models">
<p>We serve companies that have a preference for agencies as well as which are still in the research phase
                    of a lead generation freelancer model. In our agency based model we put in place structured processes,
                    tools and team support which in turn gives our clients more in terms of stability and scale as compared
                    to working with individual freelancers.</p>
<p>For companies that are looking for a full service sales agency in Dubai we put together lead generation
                    with nurturing strategies to support your sales teams.</p>

</x-service-content-card>

<x-service-content-card title="Integrated Digital Growth Support">
<p>Our growth oriented lead generation services we have put to work with other expansion tools which include
                    the Amazon marketing agency team and we also partner with the best digital marketing agency in Dubai at
                    WB Digitech.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => '1. Why use a lead generation agency in Dubai over in-house sales?', 'answer' => '<p>A professional lead generation agency in Dubai which brings to the table tools, expertise and tested
                    strategies that out perform in house efforts.</p>'],
    ['question' => '2. What is the difference between a lead generation company and a freelancer?', 'answer' => '<p>A lead gen company provides frameworks, analysis, and access to many specialists as opposed to a
                    freelance lead gen which is a solo effort with low scalability.</p>'],
    ['question' => '3. How do you identify quality leads in Dubai?', 'answer' => '<p>In Dubai we present to you targeted solutions, campaign strategies based on intent and continuous
                    improvement which in turn present high quality leads.</p>'],
    ['question' => '4. Do you see yourself in pay per lead generation companies?', 'answer' => '<p>Our company\'s model is a take off of pay per lead companies, we put more value in long term ROI and lead
                    quality.</p>'],
    ['question' => '5. Do you partner with B2B lead generation companies?', 'answer' => '<p>We have put in place support for a wide range of industries and also work with other lead generation
                    companies in whatever capacity that requires.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


<x-service-content-card title="Start Generating High-Quality Leads Today">
<p>If you are in search of a trusted lead generation agency Dubai look no further than WB Digitech which is
                    our growth partnership. As a results oriented lead generation company we help you to attract, qualify
                    and turn those leads into real revenue.</p>
<p>Let's create a sustainable growth engine for your business.</p>

</x-service-content-card>

</div>
        </div>
    </div>
@endsection