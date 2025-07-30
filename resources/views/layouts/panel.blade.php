<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>{{ config('app.name', __('Project')) }} - @yield('title', __('Dashboard'))</title>
    
    @include('partials.header')
    <!-- css -->
    @vite('resources/css/app.css')
  </head>

  @hasSection('body_override')
  <body class="bg-gray-50 dark:bg-gray-900 antialiased">
      @yield('body_override')
      
      <!-- Scripts -->
      @vite('resources/js/app.js')
    </body>
  @else
    <body class="bg-gray-50 dark:bg-gray-900 antialiased">
      @yield('main')
      
      <!-- Scripts -->
      @vite('resources/js/app.js')
    </body>
  @endif
  
</html>
