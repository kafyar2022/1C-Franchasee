<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="robots" content="none">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="yandex" content="none">
    <title>@yield('title') {{$route != 'home' ? '- 1С:Франчайзи' : ''}}</title>
    {{-- Owl carousel --}}
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    {{-- International Telephone Input With Flags and Dial Codes (jquery plugin) --}}
    <link rel="stylesheet" href="{{asset('css/intlTelInput.min.css')}}">
    {{-- Responsive Touch-enabled Image Lightbox Plugin --}}
    <link rel="stylesheet" href="{{asset('css/simple-lightbox.min.css')}}">
    {{-- App Styles --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    {{-- => background decorations --}}
    <ul class="ellipses-list">
      <li class="ellipses-item"></li>
      <li class="ellipses-item"></li>
      <li class="ellipses-item"></li>
      <li class="ellipses-item"></li>
      <li class="ellipses-item"></li>
    </ul>
    {{-- background decorations <= --}}
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
    
    <!-- JQuery 3.6  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- Owl carousel --}}
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    {{-- International Telephone Input With Flags and Dial Codes (jquery plugin) --}}
    <script src="{{asset('js/intlTelInput-jquery.min.js')}}"></script>
    {{-- Responsive Touch-enabled Image Lightbox Plugin --}}
    <script src="{{asset('js/simple-lightbox.min.js')}}"></script>
    {{-- App Scripts --}}
    <script src="{{mix('js/app.js')}}"></script>
  </body>
</html>