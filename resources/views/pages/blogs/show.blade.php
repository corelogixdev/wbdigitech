@extends('layouts.homelayout')

@php
    use Illuminate\Support\Str;
    $heroImage = !empty($blog->image) ? asset('storage/' . $blog->image) : asset('css/new-assets/wb_imgs/Blog.jpg');
@endphp

@section('title', ($blog->meta_title ?? $blog->title) . ' - WB-DIGITECH')

@section('meta')
    <meta name="description"
          content="{{ $blog->meta_description ?? Str::limit(strip_tags($blog->content), 160) }}">

    <meta name="keywords"
          content="{{ $blog->meta_keywords ?? 'digital marketing, seo, blogs, WB-DIGITECH' }}">
@endsection

@section('content')

<style>
    /* Single Blog Hero Section */
    .wb-blog-single-hero {
        background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.95)), url('{{ $heroImage }}');
        background-size: cover;
        background-position: center;
        padding: 220px 0 200px;
        color: #fff;
    }

    .wb-blog-single-wrap {
        margin-top: -100px; 
        position: relative;
        z-index: 10;
        padding-bottom: 80px;
    }

    /* Elevated Content Container */
    .wb-blog-content-box {
        background: #fff;
        border-radius: 15px;
        padding: 50px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    }

    .wb-blog-meta-date {
        color: #CC7A00;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 20px;
        display: block;
    }

    .wb-blog-content-box h1 {
        color: #0A3D62;
        font-weight: 800;
        font-size: 2.5rem;
        line-height: 1.3;
        margin-bottom: 30px;
    }

    .wb-blog-divider {
        width: 100%;
        height: 1px;
        background: #e2e8f0;
        margin: 30px 0;
    }

    .wb-blog-rich-text {
        color: #4a5568;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .wb-blog-rich-text p {
        margin-bottom: 20px;
    }

    .wb-blog-rich-text h2, .wb-blog-rich-text h3, .wb-blog-rich-text h4 {
        color: #2d3748;
        font-weight: 700;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .wb-blog-rich-text img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
    }
    
    .wb-blog-rich-text ul {
        list-style-type: disc;
        padding-left: 25px;
        margin-bottom: 20px;
    }

    .wb-blog-rich-text ol {
        list-style-type: decimal;
        padding-left: 25px;
        margin-bottom: 20px;
    }

    .wb-btn-back {
        background: #f8fafc;
        color: #0A3D62;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 25px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .wb-btn-back:hover {
        background: #0A3D62;
        color: #fff;
        border-color: #0A3D62;
    }
    
    .wb-btn-back svg {
        margin-right: 8px;
    }
</style>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Hero Section -->
            <section class="wb-blog-single-hero text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- Title is now in the box, so we just show a category/tag here -->
                            <span class="text-uppercase mb-3" style="color: #00B4D8; font-weight: 600; letter-spacing: 2px; font-size: 14px; display: block;">WB Digitech Blog</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog Content Section -->
            <section class="wb-blog-single-wrap bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            
                            <div class="wb-blog-content-box">
                                <span class="wb-blog-meta-date">Published on {{ $blog->created_at->format('F d, Y') }}</span>
                                
                                <h1>{{ $blog->title }}</h1>
                                
                                <div class="wb-blog-divider"></div>

                                <div class="wb-blog-rich-text ckeditor-output">
                                    {!! $blog->content !!}
                                </div>

                                <div class="wb-blog-divider"></div>
                                
                                <a href="{{ route('blogs.public') }}" class="wb-btn-back">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                    Back to Blogs
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>
@endsection
