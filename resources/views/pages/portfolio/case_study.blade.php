@extends('layouts.homelayout')

@section('title', $portfolio->title . ' Case Study - WB-DIGITECH')

@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- Portfolio Title and Thumbnail -->
            <section class="pt-5 pb-3 bg-white" style="padding-top: 190px !important;">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-2 col-md-3 mb-3 mb-md-0 text-center">
                            @if($portfolio->thumbnail)
                                <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="{{ $portfolio->title }} Thumbnail" class="img-fluid rounded shadow-sm">
                            @else
                                <img src="{{ asset('images/default-thumbnail.png') }}" alt="Default Thumbnail" class="img-fluid rounded shadow-sm">
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <h1 class="fw-bold text-gradient mb-2">{{ $portfolio->title }}</h1>
                            <h5 class="text-muted mb-0">Case Study</h5>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Client Overview -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="fw-bold text-gradient mb-3">Client Overview</h3>
                            
                            <!-- Removed manual markdown formatter function and added wrapper with ckeditor-output class -->
                            <div class="text-muted fs-5 ckeditor-output">
                                {!! $portfolio->client_overview ?? 'No overview provided.' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div> <!-- Added missing closing div for smooth-content -->
</div> <!-- Added missing closing div for smooth-wrapper -->

<style>
    .text-gradient {
        background: linear-gradient(90deg, #0A3D62, #0077B6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* 🔥 FIX FOR CKEDITOR BULLET POINTS & LISTS */
    .ckeditor-output ul {
        list-style-type: disc !important;
        padding-left: 25px !important;
        margin-bottom: 15px !important;
    }
    
    .ckeditor-output ol {
        list-style-type: decimal !important;
        padding-left: 25px !important;
        margin-bottom: 15px !important;
    }

    .ckeditor-output li {
        display: list-item !important;
        margin-bottom: 5px;
    }

    /* Keeps paragraphs within the rich text well-spaced */
    .ckeditor-output p {
        margin-bottom: 15px;
    }

    .ckeditor-output p:last-child {
        margin-bottom: 0;
    }
</style>
  
@endsection