@extends('layouts.homelayout')

@section('title', 'Digital Growth Insights & Marketing Tips | WB-Digitech Blog')

@section('meta_description', 'Check out the WB-Digitech blog for in depth looks at SEO, web development, design, digital marketing, ecommerce and the strategies which grow brands online.')

@section('content')

<style>
    /* Blogs Hero Section */
    .wb-blog-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)), url('{{ asset('css/new-assets/wb_imgs/Blog.jpg') }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px;
        color: #fff;
    }
    
    .wb-blog-cards-wrap {
        margin-top: -100px; 
        position: relative;
        z-index: 10;
        padding-bottom: 80px;
    }

    /* Elevated Blog Card */
    .wb-blog-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .wb-blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    }

    .wb-blog-thumb {
        position: relative;
        width: 100%;
        height: 250px;
        overflow: hidden;
    }

    .wb-blog-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .wb-blog-card:hover .wb-blog-thumb img {
        transform: scale(1.05);
    }

    .wb-blog-meta {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #0A3D62;
        color: #fff;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .wb-blog-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .wb-blog-title {
        color: #0A3D62;
        font-weight: 700;
        font-size: 20px;
        line-height: 1.4;
        margin-bottom: 15px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .wb-blog-title:hover {
        color: #CC7A00;
    }

    .wb-blog-readmore {
        margin-top: auto;
        color: #718096;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: color 0.3s ease;
    }

    .wb-blog-readmore svg {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .wb-blog-card:hover .wb-blog-readmore {
        color: #00B4D8;
    }

    .wb-blog-card:hover .wb-blog-readmore svg {
        transform: translateX(5px);
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-blog-hero text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 1px; font-size: 14px; display: block;">Insights & Resources</span>
                            <h1 class="fw-bolder mb-4" style="color: #ffffff; line-height: 1.2; font-size: 3.5rem;">
                                Digital Growth Insights & Marketing Tips
                            </h1>
                            <p style="color: #e2e8f0; font-size: 18px; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                                Explore the latest trends, strategies, and insights from our experts to help your brand thrive online.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog Grid Section -->
            <section class="wb-blog-cards-wrap bg-light">
                <div class="container container-1500">
                    <div class="row g-4">
                        @forelse($blogs as $blog)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="wb-blog-card">
                                    <div class="wb-blog-thumb">
                                        <a href="{{ route('blogs.public.show', $blog->slug) }}">
                                            @if(!empty($blog->image))
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title ?? 'Blog Image' }}">
                                            @else
                                                <img src="{{ asset('new-assets/img/placeholder.jpg') }}" alt="Placeholder">
                                            @endif
                                        </a>
                                        <div class="wb-blog-meta">
                                            {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'Date N/A' }}
                                        </div>
                                    </div>
                                    <div class="wb-blog-content">
                                        <a href="{{ route('blogs.public.show', $blog->slug) }}" class="wb-blog-title">
                                            {{ $blog->title }}
                                        </a>
                                        <a href="{{ route('blogs.public.show', $blog->slug) }}" class="wb-blog-readmore">
                                            Read Article 
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <h3 class="text-muted" style="font-weight: 600; color: #718096;">No blogs available right now.</h3>
                                <p class="text-muted">Check back soon for new insights!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection