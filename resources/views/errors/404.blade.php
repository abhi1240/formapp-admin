<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $pageTitle ?? 'Bootstrap 4 Laravel Web Application')</title>
    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description', $pageDescription ?? 'Bootstrap 4 Laravel Web Application')"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- Inject:css, Global Theme Styles (used by all pages) --}}
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Includable CSS --}}
    @yield('styles')
    {{-- Endinject --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
</head>
    <body>
        <main class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- Start: error page -->
                        <div class="min-vh-100 content-center">
                            <div class="error-page text-center">
                                <img src="{{ asset('img/svg/404.svg') }}" alt="404" class="svg">
                                <div class="error-page__title">404</div>
                                <h5 class="fw-500">Sorry! the page you are looking for doesn't exist.</h5>
                                <div class="content-center mt-30">
                                    <a href="{{ route('dashboards.index') }}" class="btn btn-primary btn-default btn-squared px-30">Return Home</a>
                                </div>
                            </div>
                        </div>
                        <!-- End: error page -->
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
