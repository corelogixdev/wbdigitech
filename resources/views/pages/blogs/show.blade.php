@extends('layouts.homelayout')

@section('title','Blogs - WB-DIGITECH')

@section('content')

<div class="blog-single-page py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Blog Card -->
                <div class="card shadow-sm rounded-3 mb-5 border-0">
                    @if($blog->image && file_exists(public_path('storage/'.$blog->image)))
                        <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top rounded-top" alt="{{ $blog->title }}">
                    @endif

                    <div class="card-body px-4 py-4">
                        <h1 class="card-title mb-3 text-dark">{{ $blog->title }}</h1>
                        <p class="text-muted small">
                            Published on {{ $blog->created_at ? $blog->created_at->format('d M, Y') : 'Date N/A' }}
                        </p>
                        <hr>
                        <div class="blog-content text-dark" style="line-height:1.7; font-size:1rem;">
                            {!! nl2br(e($blog->content)) !!}
                        </div>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center mb-5">
                    <a href="{{ route('blogs.public') }}" class="btn btn-primary btn-lg px-4">
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

.blog-single-page .blog-content p {
    font-size: 1rem;
    margin-bottom: 1rem;
}

.blog-single-page .btn-primary {
    background-color: #0077B6;
    border-color: #0077B6;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}
.blog-single-page .btn-primary:hover {
    background-color: #005f8a;
    border-color: #005f8a;
}

.blog-single-page img.card-img-top {
    max-height:650px;
    object-fit: cover;
}
</style>
@endsection
