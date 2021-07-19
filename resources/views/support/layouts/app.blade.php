<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
   dir="{{ (Session::get('layout')=='rtl' ? 'rtl' : 'ltr') }}">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSRF Token -->
    <meta name="url" content="{{ url('/') }}" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      {{-- Title Section --}}
      <title>{{ config('app.name') }} | @yield('title', $pageTitle ?? 'App')
      </title>
      {{-- Meta Data --}}
      <meta name="description"
         content="@yield('page_description', $pageDescription ?? 'App')" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- Fonts --}}
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
      {{-- Inject:css, Global Theme Styles (used by all pages) --}}
      @include('support.layouts.partials._styles')
      {{-- Includable CSS --}}
      @yield('styles')
      {{-- Endinject --}}
      <link href="{{ asset('theme/assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
   </head>
   <body class="layout-light side-menu @auth() overlayScroll @endauth">
      @auth()
      <div class="mobile-search"></div>
      <div class="mobile-author-actions"></div>
      @include('support.layouts.partials._header')
      @endauth
      <main class="main-content">
         @auth()
            @include('support.layouts.partials._aside')
         @endauth
         @section('content')
         @show
         @auth()
            @include('support.layouts.partials._footer')
         @endauth
      </main>
      @auth()
      <div id="overlayer">
         <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
               <span class="spin-dot badge-dot dot-primary"></span>
               <span class="spin-dot badge-dot dot-primary"></span>
               <span class="spin-dot badge-dot dot-primary"></span>
               <span class="spin-dot badge-dot dot-primary"></span>
            </div>
         </span>
      </div>
      {{-- @include('layouts.partials._customizer') --}}
      @endauth
      <div class="overlay-dark-sidebar"></div>
      <div class="customizer-overlay"></div>
      {{-- Inject:js, Global Theme JS Bundle (used by all pages) --}}
      @yield('mapScript')
      @include('support.layouts.partials._scripts')
      {{-- Includable JS --}}
      @yield('scripts')
      {{-- Endinject --}}
   </body>
</html>
