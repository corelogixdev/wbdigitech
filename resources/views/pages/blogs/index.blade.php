@extends('layouts.homelayout')

@section('title', 'WB-DigiTech | Blogs')

@section('content')

<div class="container my-5">
    <h2 class="mb-4">Latest Blogs</h2>
    <div class="row g-4">
        @foreach(\App\Models\Blog::latest()->take(3)->get() as $blog)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="Blog Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                        <a href="{{ route('blogs.public.show',[$blog->id])}}" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection