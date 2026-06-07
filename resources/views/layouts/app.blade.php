<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Lock the screen container completely */
            .app-container {
                height: 100vh;
                max-height: 100vh;
                overflow: hidden;
            }

            /* This container controls all your page data independent of the sidebar */
            .main-content-wrapper {
                flex-grow: 1;
                height: 100vh;
                overflow-y: auto; /* Only this center panel handles scrolling now */
                transition: padding-left 0.25s ease-in-out;
            }
            
            /* Desktop View spacing protection */
            @media (min-width: 992px) {
                .sidebar-is-open .main-content-wrapper {
                    padding-left: 260px; 
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased sidebar-is-open" x-data="{ sidebarOpen: true }" :class="{ 'sidebar-is-open': sidebarOpen }">
        
        <div class="d-flex app-container bg-light w-100">
            
            @include('layouts.sidebar')

            <div class="main-content-wrapper">
                @include('layouts.navigation')

                @isset($header)
                    <header class="bg-white shadow-sm border-bottom">
                        <div class="container-fluid py-3 px-4">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <main class="p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>

    </body>
</html>