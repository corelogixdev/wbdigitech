@extends('layouts.homelayout') {{-- or your main frontend layout --}}

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Blog Card -->
            <div class="card shadow-sm mb-4">
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                @endif

                <div class="card-body">
                    <h1 class="card-title mb-3">{{ $blog->title }}</h1>
                    <p class="text-muted">
                        Published on {{ $blog->created_at->format('M d, Y') }}
                    </p>
                    <hr>
                    <div class="blog-content">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <a href="{{ route('blogs.public') }}" class="btn btn-outline-primary">
                ← Back to Blogs
            </a>

        </div>
    </div>
</div>
@endsection
