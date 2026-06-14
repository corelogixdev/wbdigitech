@extends('layouts.homelayout')

@section('title', 'AI Social Media Marketing Agency | Smart AI Social Media Services')
@section('meta_description', 'WB Digitech is an AI social media marketing firm which we use at your service to increase engagement, leads, and ROI across all social media platforms.')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="main-wrapper">

        <x-service-hero
            image="css/new-assets/ai_imgs/AIsocial mediamarketing-01.webp" 
            title="AI Social Media Marketing Agency for Smarter Growth"
            description="As a forward thinking AI social media marketing agency WB Digitech helps brands grow faster with our intelligent automation, data analysis, and creative strategy. We have designed our AI social media services to target the right audience, see which posts perform best, and in turn see an increase in conversions across all major social platforms."
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
                        <li><a href="{{ route('ai_digital_marketing') }}">AI Digital Marketing</a></li>
                        <li class="current-menu-item"><a href="{{ route('ai_social_media') }}">AI Social Media Marketing</a>
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

<x-service-content-card title="Data-Driven AI Social Media Services That Perform">
<p>Our AI social media services utilize real time analysis and machine learning algorithms to track and
                    report on which of your users' actions are most valued and which of your campaign goals are being met.
                    With AI for social media marketing, we put together the best post times, design the most effective
                    content forms, and choose the best audiences to reach out to in order to maintain that steady
                    engagement.</p>
<p>As a professional AI social media marketing agency that's been in the industry for a while, we put
                    forward results. We see real growth in terms of reach, clicks, leads, and sales which is what our
                    clients care about and not just metrics that look good but don't translate to action.</p>

</x-service-content-card>

<x-service-content-card title="How AI Transforms Social Media Marketing">
<p><strong>AI Social Media Marketing Strategy</strong><br>
                    We put together AI social media marketing strategies that are predictive and automated for you. From
                    content creation through to performance analysis we use AI in social media marketing to remove the
                    guesswork and increase accuracy.</p>
<p><strong>AI-Driven Content &amp; Campaign Optimization</strong><br>
                    Through the use of social advertising AI we constantly look at what is working and improve our campaigns
                    for better ROI. We have a data driven approach to AI in social media market which sees to it that your
                    ads and organic content reach the most relevant audience.</p>
<p><strong>Smart Audience Targeting</strong><br>
                    Through the use of AI based social media marketing we identify high intent users and put together
                    targeted campaigns which in turn see brands convert faster at a lower ad spend.</p>

</x-service-content-card>

<x-service-content-card title="Why Choose WB Digitech as Your AI Social Media Marketing Agency">
<p>Proven experience in AI social media marketing solutions.</p>
<p>Performance-focused AI social media services</p>
<p>Advanced automation and analytics</p>
<p>Creative + data-driven approach</p>
<p>Transparent reporting and optimization</p>
<p>We also work with social media marketing experts to ensure our strategies are creative and that we
                    integrate AI perfectly.</p>

</x-service-content-card>

<x-service-content-card title="AI Social Media Marketing for Businesses of All Sizes">
<p>Whether a new player in the market or an old brand, we scale our AI social media marketing to what you
                    need. From organic strategies to paid campaigns that feature social advertising AI, we help companies
                    produce sustainable success.</p>
<p>From our team you can also hire AI marketing agency to us for your AI marketing needs which we will
                    support you with fully and see to it that execution is fast.</p>

</x-service-content-card>

<x-service-content-card title="Future-Ready AI Social Media Services">
<p>With the change in algorithms and consumer behavior AI in social media marketing is a must have, it is no
                    longer a choice. We have developed solutions which include automation, analysis, and creativity to
                    secure your brand's online future.</p>
<p>As a part of our large scale strategy we have also turned to a digital marketing agency in Dubai for our
                    campaigns which we present as an extension of our brand.</p>

</x-service-content-card>


@php
$serviceFaqs = [
    ['question' => 'What is the role of a social media marketing AI?', 'answer' => '<p>An AI social media marketing agency that uses automation, analytics, and machine learning to run
                    campaigns better, reach the right audience more effectively, and increase engagement which in turn is a
                    superior result to what manual methods bring.</p>'],
    ['question' => 'How are AI based social media services improving?', 'answer' => '<p>AI powered social media platforms that analyze data as it happens which in turn allows brands to use AI
                    for better social media marketing and to get predictive insights.</p>'],
    ['question' => 'Is small business social media marketing a good fit for AI?', 'answer' => '<p>Yes AI for social media is a tool which small businesses use to cut costs and improve targeting.</p>'],
    ['question' => 'Can technology enhance social media advertising ROI?', 'answer' => '<p>Sure. Through the use of AI in social advertising campaigns we see constant improvement in terms of
                    reach, clicks, and conversions.</p>'],
    ['question' => 'May I hire dedicated AI professionals for social media marketing?', 'answer' => '<p>Yes, at WB Digitech we offer you to hire AI marketing agency specialists for either an on going or
                    project based support.</p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />


<x-service-content-card title="Let's Grow Your Brand with AI Social Media Marketing">
<p>Work with our team at WB Digitech which we have chosen for their in-depth knowledge of tech and creative.
                    With WB Digitech's AI approach to social media we will see smart campaigns, improved engagement, and
                    real business growth.</p>
<p>Today is the day to begin and let AI do the hard work for your social media success.</p>

</x-service-content-card>

</div>
        </div>
    </div>
@endsection