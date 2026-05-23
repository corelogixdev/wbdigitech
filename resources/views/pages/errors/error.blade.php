@extends('layouts.homelayout')

@section('title', 'Error')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 120vh;">
    
    <div class="card shadow border-0" style="max-width: 600px; width: 100%;">
        <div class="card-body text-center py-5">

            <h1 class="display-1 text-danger mb-3">
                {{ $code }}
            </h1>

            <h3 class="mb-3">
                @switch($code)
                    @case(403)
                        Access Denied
                        @break

                    @case(404)
                        Page Not Found
                        @break

                    @case(419)
                        Session Expired
                        @break

                    @case(500)
                        Internal Server Error
                        @break

                    @default
                        Something Went Wrong
                @endswitch
            </h3>

            <p class="text-muted">
                @switch($code)
                    @case(403)
                        You do not have permission to access this page.
                        @break

                    @case(404)
                        The requested page could not be found.
                        @break

                    @case(419)
                        Your session has expired. Please login again.
                        @break

                    @case(500)
                        An unexpected error occurred.
                        @break

                    @default
                        Please contact the administrator.
                @endswitch
            </p>

            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    Back
                </a>
            </div>

        </div>
    </div>

</div>

@endsection