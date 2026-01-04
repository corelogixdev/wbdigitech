@extends('layouts.homelayout')

@section('title', 'Portfolio - WB-DIGITECH')

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
                                        <img data-speed=".8"
                                            src="{{asset('css/new-assets/img/inner-blog/blog-standard/blog-1.jpg')}}"
                                            alt="Portfolio Banner">
                                        <div class="tp-blog-standard-title-box d-none d-sm-block">
                                            <h1 class="tp-blog-standard-title tp-char-animation">
                                                Our Portfolio <br> Showcasing Creativity & Strategy
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Grid Section -->
                <section class="tp-blog-standard-area pt-50 pb-10">
                    <div class="container container-1500">
                        <div class="row">
                            @forelse($portfolios as $portfolio)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-40">
                                                        <div class="tp-blog-item position-relative overflow-hidden">
                                                            <div class="tp-blog-thumb fix p-relative">
                                                                <a
                                                                    href="{{ route('portfolio.public.show', ['title' => Str::slug($portfolio->title), 'id' => $portfolio->id]) }}">
                                                                    @if($portfolio->thumbnail)
                                                                        <img src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                                                                            alt="{{ $portfolio->title }}" class="img-fluid w-100">
                                                                    @else
                                                                        <img src="{{ asset('new-assets/img/placeholder.jpg') }}" alt="Portfolio">
                                                                    @endif
                                                                </a>
                                                                <!-- Overlay Get in Touch -->
                                                                <div
                                                                    class="portfolio-overlay d-flex flex-column justify-content-center align-items-center">

                                                                    <a href="{{ route('contact') }}" class="btn btn-light btn-sm mt-2">Get In
                                                                        Touch</a>
                                                                </div>
                                                            </div>
                                                            <div class="tp-blog-content">
                                                                <span>
                                                                    <a href="{{ route('portfolio.public.show', [
                                    'title' => Str::slug($portfolio->title),
                                    'id' => $portfolio->id
                                ]) }}">
                                                                        READ MORE
                                                                    </a>
                                                                </span>

                                                                <h4 class="tp-blog-title-sm">
                                                                    <a class="text-heading-4" href="{{ route('portfolio.public.show', [
                                    'title' => Str::slug($portfolio->title),
                                    'id' => $portfolio->id
                                ]) }}">
                                                                        {{ $portfolio->title }}
                                                                    </a>
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div>
                            @empty
                                <p class="text-center">No portfolio projects available.</p>
                            @endforelse
                        </div>
                    </div>
                </section>
            </main>
            {{--
        </div>
    </div> --}}

    <style>
        /* ==============================
                                                                                                                                       Portfolio Page Styling
                                                                                                                                       ============================== */

        /* Banner Section */
        .tp-blog-standard-thumb-box {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .tp-blog-standard-thumb-box img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            object-position: center;
            border-radius: 12px;
        }

        .tp-blog-standard-title-box {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .tp-blog-standard-title {
            font-size: 2.8rem;
            font-weight: 700;
            line-height: 1.3;
            color: #fff;
            text-shadow: 0 3px 12px rgba(0, 0, 0, 0.5);
        }

        /* Portfolio Card */
        .tp-blog-item {
            border-radius: 12px;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease;
            background: #fff;
        }

        .tp-blog-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .tp-blog-thumb {
            width: 100%;
            height: 260px;
            /* fixed height for all thumbnails */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            /* optional, for empty space */
            border-radius: 12px;
            overflow: hidden;
        }

        .tp-blog-thumb img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            /* ensures entire image is visible */
            border-radius: 12px;
        }

        /* Overlay */
        .portfolio-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(10, 61, 98, 0.7) 0%, rgba(0, 119, 182, 0.7) 100%);
            opacity: 0;
            transition: opacity .3s ease;
            border-radius: 12px;
        }

        .tp-blog-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-overlay h5 {
            color: #fff;
            font-weight: 600;
            font-size: 1.25rem;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
        }

        /* Button inside overlay */
        .portfolio-overlay .btn {
            background: #fff;
            color: #0A3D62;
            border-radius: 30px;
            padding: 6px 16px;
            font-weight: 600;
            transition: all .3s ease;
        }

        .portfolio-overlay .btn:hover {
            background: linear-gradient(90deg, #0A3D62, #0077B6);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Portfolio Content */
        .tp-blog-content {
            padding: 16px;
            text-align: center;
        }

        .tp-blog-content span a {
            font-size: 0.85rem;
            font-weight: 500;
            color: #0077B6;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .tp-blog-content h4 a {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0A3D62;
            text-decoration: none;
            transition: color .3s ease;
        }

        .tp-blog-content h4 a:hover {
            color: #0077B6;
        }

        /* ==============================
                                                                                                                                       Responsive Fix for Banner Image
                                                                                                                                       ============================== */
        @media (max-width: 768px) {
            .tp-blog-standard-thumb-box img {
                height: 280px;
                /* tablet view */
            }

            .tp-blog-standard-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .tp-blog-standard-thumb-box img {
                height: 200px;
                /* mobile view */
            }

            .tp-blog-standard-title {
                font-size: 1.5rem;
                line-height: 1.2;
            }
        }
    </style>

@endsection