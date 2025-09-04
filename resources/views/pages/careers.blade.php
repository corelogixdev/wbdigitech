@extends('layouts.homelayout');

@section('title','WB-DigiTech | Careers')

@section('content')

<div class="container py-5">
    <h2 class="mb-4">Careers</h2>
    <div class="row">
        @forelse($careers as $career)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $career->title }}</h5>
                        <p>{{ $career->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No career opportunities available right now.</p>
        @endforelse
    </div>
</div>


@endsection