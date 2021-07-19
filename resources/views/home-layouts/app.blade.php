<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Form Filling </title>
 <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Favicon -->
  @include('home-layouts.styles')
</head>
<body>
  <div id="app">
    @include('home-layouts.header')
      <main class="py-4">
          @yield('content')
          @include('home-layouts.footer')
      </main>
      <div class="u-outer-spaces-helper"></div>
      @include('home-layouts.scripts')
  </div>
</body>
</html>
