@extends('layouts.homelayout')

@section('title', 'WB-DigiTech | Blogs')

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
                                <h1 class="text-display-3 color-gray-900 mb-20">Our Latest Blogs</h1>
                                <p class="text-heading-6 color-gray-600 mb-20">Stay updated with the latest news, tips, and insights from WB-DigiTech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog Section -->
            <div class="tp-blog-standard-area pt-100 pb-70">
                <div class="container container-1500">
                    <div class="row">
                        @forelse($blogs as $blog)
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                                <div class="tp-blog-item">
                                    <div class="tp-blog-thumb fix p-relative">
                                        <a href="{{ route('blogs.public.show', $blog->id) }}">
                                            @if($blog->image)
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                            @else
                                                <img src="{{ asset('new-assets/img/placeholder.jpg') }}" alt="Blog Image">
                                            @endif
                                        </a>
                                        <div class="tp-blog-meta">
                                            <span>{{ $blog->created_at->format('d M, Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="tp-blog-content">
                                        <span>
                                            <a href="#">Blog</a> {{-- Optional: use category if exists --}}
                                        </span>
                                        <h4 class="tp-blog-title-sm">
                                            <a class="text-heading-4" href="{{ route('blogs.public.show', $blog->id) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h4>
                                        <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No blogs available right now.</p>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="col-12">
                        <div class="basic-pagination mt-40 text-center">
                            <div class="paginations">
                                {{ $blogs->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
