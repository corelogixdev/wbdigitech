@extends('layouts.homelayout')

@section('title', 'Blogs - WB-DIGITECH')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Banner Section -->
            <section class="section-box">
                <div class="banner-hero bg-gray-100">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-blog-standard-thumb-box p-relative">
                                    <img data-speed=".8" src="{{ asset('css/new-assets/wb_imgs/Blog.jpg') }}" alt="BLOG">
                                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                                        <h1 class="tp-blog-standard-title tp-char-animation">Our Latest Blogs <br> With Latest Insights</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <!-- Blog Section -->
<section class="blog-details-realated-area pt-100 pb-70 bg-light">
    <div class="container container-1500">
        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                    <div class="tp-blog-item">
                        <div class="tp-blog-thumb fix p-relative rounded">
                            <a href="{{ route('blogs.public.show', $blog->slug) }}">
                                @if(!empty($blog->image))
                                    <img src="{{ asset('storage/' . $blog->image) }}" 
                                         alt="{{ $blog->title ?? 'Blog Image' }}" 
                                         class="img-fluid">
                                @endif
                            </a>
                            <div class="tp-blog-meta">
                                <span class="bg-dark text-white px-2 py-1 rounded">
                                    {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'Date N/A' }}
                                </span>
                            </div>
                        </div>
                        <div class="tp-blog-content text-center mt-3">
                            <span class="text-muted"><a href="#">Blog</a></span>
                            <h4 class="tp-blog-title-sm mt-2">
                                <a class="text-dark" href="{{ route('blogs.public.show', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h4>
                            <p class="text-muted mt-1">
                            {{ Str::limit(strip_tags(html_entity_decode($blog->content)), 100, '...') }}
                        </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No blogs available right now.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
</main>

<style>
    /* Blogs Section */
.blog-details-realated-area {
    padding-top: 100px;
    padding-bottom: 70px;
    background: #f8f9fa;
}

.tp-blog-item {
    border-radius: 15px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.tp-blog-item:hover {
    transform: translateY(-5px);
}

.tp-blog-thumb img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-bottom: 2px solid #0077B6;
    border-radius: 10px 10px 0 0;
}

.tp-blog-meta {
    position: absolute;
    top: 15px;
    left: 15px;
}

.tp-blog-title-sm a {
    color: #0A3D62;
    font-weight: 600;
    text-decoration: none;
}
.tp-blog-title-sm a:hover {
    color: #0077B6;
    text-decoration: underline;
}

.tp-blog-content p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.5;
}
</style>
@endsection
