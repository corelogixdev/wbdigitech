@extends('layouts.homelayout')

@section('title', 'Beautiful Website Design That Converts | WB-Digitech')

@section('meta_description', 'Stand out with our great website design at WB-Digitech which includes user centered layouts, mobile optimized visuals, and intuitive experiences that increase engagement.')

@section('content')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="main-wrapper">

    <x-service-hero
            image="css/new-assets/web_imgs/WebsiteDesign.webp" 
            title="Leading Web Design Company in Dubai"
            description="We are a reputable web design company, which creates stunning, user-friendly, and mobile websites. Our designs are innovative, and functional to provide your visitors with the best online experience."
            serviceCategory="Web Development"
            serviceName="Web Development"
        >
        </x-service-hero>

    <!-- Content & Sidebar -->
    <div class="container-flex">
        
        <!-- Sidebar -->
        <div class="sidebar-col">
            <div class="sidebar">
                <h6>Our Services</h6>
                <ul>

                    <li><a href="{{ route('services.web_dev') }}">Website Development</a></li>
                    <li><a href="{{ route('services.content_writing') }}">Content Writing</a></li>
                    <li><a href="{{ route('services.ecommerce_development') }}">E-commerce Development</a></li>
                    <li><a href="{{ route('services.shopify_development') }}">Shopify Development</a></li>
                    <li class="current-menu-item"><a href="{{ route('services.website_design') }}">Website Design</a></li>
                    <li><a href="{{ route('services.website_maintainance') }}">Website Maintenance</a></li>
                    <li><a href="{{ route('services.wordpress_development') }}">WordPress Development</a></li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="content-col">

<x-service-content-card title="How a Web Design Company Ensures Top-Quality Website Design?">
<p>
                We provide user-friendly and pretty websites that are a match to your brand and is a trusted web design company. Good design is beautiful, user-friendly, and possesses the features that the visitors require. WB Digitech is a Dubai based web design firm, which makes sure that all aspects of the site, both appearance and functionality promote your online existence and present your brand in the best manner possible.
            </p>

</x-service-content-card>

<x-service-content-card title="Responsive or Static – A Critical Web Designing Choice">
<p>
                A responsive site is a must to any web design company in the UAE. A responsive design is compatible with all kinds of devices and screens and provides them with a seamless experience. Static designs do not change, whereas responsive layouts adapt to ensure that users are impressed. In case you require an ecommerce web design company or the best web design company in UAE, we create scalable and responsive designs that are perfectly functional and best make your business shine out online.
            </p>

</x-service-content-card>

<x-service-content-card title="Complete Web Designing Company with a Contemporary Business">
<p>
                WB Digitech is a leading web designing company. We design entire web sites that fit your company. We are considered to be top web designing companies in Dubai one of the best in Dubai. Creativity and technology enable us to develop convenient, search engine friendly and responsive websites, which are compatible with any device. Our team will ensure that every project is a demonstration of your brand and will enhance customer trust and interest.
            </p>

</x-service-content-card>

<x-service-content-card title="Dubai Creative Web Design Company">
<p>
                WB Digitech, a top Web Design company, has a skilled staff of web design experts, developers, SEO professionals, and graphic designers with years of digital marketing knowledge. Being a reputable web design firm Dubai, we offer thorough and tailored solutions for all kinds of businesses. Ensuring both originality and utility, our services include high-performing designs from the finest top web designing companies in Dubai.
            </p>

</x-service-content-card>

<x-service-content-card title="Reasons to Select Our Web Design Business">
<p>Our websites stand out for their:</p>
<ul class="services-list">
                <li>Quick Loading</li>
                <li>Responsive Layouts</li>
                <li>Security</li>
                <li>Interesting UI/UX design</li>
            </ul>
<p>
                As one of Dubai's premier web design company, we guarantee every website matches our client's vision and supports their online expansion.
            </p>

</x-service-content-card>

@php
$serviceFaqs = [
    ['question' => 'What Should a Web Design Company Keep in Mind Before Starting a Project?', 'answer' => '<p>
                   A Web Design Company should have a thorough grasp of the client\'s goals, target, and business identity before beginning any design work. 
                </p>'],
    ['question' => 'What Defines the Services of Website Design and Development?', 'answer' => '<p>
                  WB Digitech is an expert web design company that will make you grow online by creating websites that match your brand. We will provide the full design and development such as SEO and user experience planning to programming. 
                </p>'],
    ['question' => 'The Time Taken by a Web Design Company to Develop a New Website?', 'answer' => '<p>
                   Normally, it requires several weeks and months to construct a new business site depending upon the size of a business, the target it intends to reach, and the features that it requires. 
                </p>'],
    ['question' => 'What are the Industrial Projects that we Handle?', 'answer' => '<p>
                    We are a reputable web design company that collaborates with several industries to develop digital solutions that are helpful and innovative. 
                </p>'],
    ['question' => 'What is the Cost of a Website in Dubai Through a Design Company?', 'answer' => '<p>
                    The price depends on the size, appearance, functionality, and intentions of the site. Your money will ensure good returns as an experienced web design company like ours will ensure. 
                </p>'],
];
@endphp
<x-accordion-faq :faqs="$serviceFaqs" />

</div>
    </div>
</div>
@endsection
