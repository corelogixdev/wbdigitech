@extends('layouts.homelayout')

@section('title', 'AI-Powered Digital Marketing for Smart Growth | WB-Digitech')
@section('meta_description', 'Grow better with AI digital marketing from WB-DigiTech. We put our best foot forward in terms of AI powered digital marketing, SEO, ad campaigns and automation which in turn we see to it that we get you the best ROI and future proof growth.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/ai_imgs/AidigitalMarketing-01.webp" 
            title="AI Digital Marketing Services That Drive Smart Growth"
            description="At WB-DigiTech, we present to you our AI digital marketing solutions which we put out there for businesses to reach the right audience at the right time with the right message. We combine data intelligence, automation and creativity in our AI based digital marketing which in turn transforms traditional campaigns into high performance growth engines."
            serviceCategory="AI Marketing"
            serviceName="AI Marketing"
        >
        </x-service-hero>


        <!-- Content & Sidebar -->
        <div class="container-flex">

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div class="sidebar">
                    <h6>Our Services</h6>
                    <ul>
                        <li><a href="{{ route('ai_marketing') }}">AI Marketing Overview</a></li>
                        <li class="current-menu-item"><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a>
                        </li>
                        <li><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a>
                        </li>
                        <li><a href="{{ route('ai_website') }}">AI Website Services</a></li>
                        <li><a href="{{ route('ai_seo') }}">AI-Powered SEO</a></li>
                        <li><a href="{{ route('ai_google_ads') }}">AI Google Ads Management</a></li>
                        <li><a href="{{ route('ai_web_app') }}">AI Web Applications</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-col">

<x-service-content-card title="Why AI Digital Marketing Matters Today">
<p>Present day customers' expect personalization, speed and relevance. AI for digital marketing which is
                    used by businesses to analyze large data sets, predict user behavior, and improve campaigns in real
                    time. This is not a trend, it is the future of AI in digital marketing.</p>
<p>Through the use of digital marketing and AI brands achieve better insights, more efficient automation,
                    and improved decision making which spans all channels.</p>

</x-service-content-card>

<x-service-content-card title="Our AI Digital Marketing Services">
<p><strong>AI Social Media Marketing</strong><br>
                    We use AI social media marketing which includes content scheduling, analysis of engagement trends, and
                    identification of best response audiences. Our AI tools which we use for post timing, creative design,
                    and audience segmentation aim to increase our reach and see through to action.</p>
<p><strong>AI Website Design &amp; Optimization</strong><br>
                    We develop smart, adaptive sites that use AI driven digital marketing strategies. In what we do, you'll
                    see we focus on intuitive layouts and behavioral analysis which in turn improve your engagement,
                    conversions and performance.</p>
<p><strong>AI Digital Campaign Management</strong><br>
                    Our company's AI digital marketing includes email, PPC, content, and analytics. We are into the use of
                    AI based digital marketing which is a continuous process of testing, learning and improving campaigns
                    which in turn we see play out in terms of consistent ROI and reduced manual effort.</p>
<p><strong>AI Powered SEO</strong><br>
                    Our AI powered digital marketing for SEO which includes smart keyword optimization, predictive content
                    structure, and technical performance. We use AI in digital marketing to help sites rank higher, faster
                    and more sustainably.</p>
<p><strong>AI Google Ads Optimization</strong><br>
                    Through AI online marketing we see to it that Google Ads performance is improved with smart bidding,
                    audience forecasting, and ad optimization. AI also improves on target accuracy which in turn reduces
                    cost per click and increases conversions.</p>
<p><strong>AI Web App Development</strong><br>
                    We develop scalable smart web applications that we integrate into your AI digital marketing system. We
                    put together solutions which automate processes, improve customer experience, and support sustainable
                    digital growth.</p>

</x-service-content-card>

<x-service-content-card title="Why Choose WB-DigiTech?">
<p>Proven AI digital marketing agency expertise</p>
<p>Certified digital marketing experts</p>
<p>AI fueled data based strategies in digital marketing.</p>
<p>Customized solutions for every business size</p>
<p>Transparent reporting and measurable results</p>
<p>As a visionary AI digital agency, we go beyond running campaigns we develop smart systems that grow with
                    your business.</p>

</x-service-content-card>

<x-service-content-card title="The Real Power of Digital Marketing with AI">
<p>Through the use of digital marketing with AI, we see that brands get predictive insights, personalized
                    customer journeys, and automated optimization across channels. We present AI based digital marketing
                    solutions which put data where it belongs off the guesswork.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What does digital marketing which includes AI entail?', 'answer' => '<p>AI in digital marketing uses machine learning to analyze data, automate campaigns, and improve
                    performance across channels which include SEO, ads, email, and social media.</p>'],
    ['question' => 'AI in digital marketing: what is its role in improving ROI?', 'answer' => '<p>AI driven digital marketing which uses advanced algorithms to target the right audience, predict behavior
                    and in real time optimizes campaigns.</p>'],
    ['question' => 'Is AI a good fit for small businesses in digital marketing?', 'answer' => '<p>Yes. AI in digital marketing which enables small companies to compete by performing tasks automatically,
                    improving target audience reach, and producing better results on tight budgets.</p>'],
    ['question' => 'What sets WB-DigiTech apart from other agencies?', 'answer' => '<p>We have put together a digital marketing plan which integrates AI and also uses our industry specific
                    knowledge to present to you customized, forward thinking solutions that achieve your business goals.</p>'],
    ['question' => 'What role does AI play in the growth of brands on social media?', 'answer' => '<p>AI in social media marketing which is seeing results by way of determining best post times, content
                    types, and audience behavior for greatest reach and sales.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


</div>
        </div>
    </div>
@endsection