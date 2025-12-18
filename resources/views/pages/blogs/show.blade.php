@extends('layouts.homelayout')

@php
    use Illuminate\Support\Str;
@endphp

{{-- PAGE TITLE --}}
@section('title', ($blog->meta_title ?? $blog->title) . ' - WB-DIGITECH')

{{-- SEO META --}}
@section('meta')
    <meta name="description"
          content="{{ $blog->meta_description ?? Str::limit(strip_tags($blog->content), 160) }}">

    <meta name="keywords"
          content="{{ $blog->meta_keywords ?? 'digital marketing, seo, blogs, WB-DIGITECH' }}">
@endsection

@section('content')

<div class="blog-single-page py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Blog Card -->
                <div class="card shadow-sm rounded-3 mb-5 border-0">

                    @if(!empty($blog->image))
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             class="card-img-top rounded-top"
                             alt="{{ $blog->title }}">
                    @endif

                    <div class="card-body px-4 py-4">

                        <h1 class="card-title mb-3 text-dark">
                            {{ $blog->title }}
                        </h1>

                        <p class="text-muted small mb-3">
                            Published on {{ $blog->created_at->format('d M, Y') }}
                        </p>

                        <hr>

                        <!-- BLOG CONTENT (TinyMCE HTML OUTPUT) -->
                        <div class="blog-content ">
                            {!! $blog->content !!}
                        </div>

                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center mb-5">
                    <a href="{{ route('blogs.public') }}"
                       class="btn btn-primary btn-lg px-4">
                        ← Back to Blogs
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
/* Single Blog Page */
.blog-single-page {
    background-color: #f8f9fa;
}

.blog-single-page .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.blog-single-page .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.1);
}

.blog-single-page .card-title {
    font-size: 2rem;
    font-weight: 700;
}

.blog-single-page .blog-content {
    line-height: 1.8;
    font-size: 1rem;
}

.blog-single-page .blog-content p {
    margin-bottom: 1rem;
}

.blog-single-page img.card-img-top {
    max-height: 650px;
    object-fit: cover;
}

.blog-single-page .btn-primary {
    background-color: #0077B6;
    border-color: #0077B6;
}

.blog-single-page .btn-primary:hover {
    background-color: #005f8a;
    border-color: #005f8a;
}
</style>

@endsection
