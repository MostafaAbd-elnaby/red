<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="keywords" content="tours">
      <meta name="description" content="egypt tour">
      <meta name="author" content="red">

        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset("css/responsive.css")}}">
        <!-- fevicon -->
        <link rel="icon" href="{{asset("images/red_py.png")}}" type="image/gif" />
        <!-- Tweaks for older IEs-->
        {{-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset("css/nice-select.css")}}">
        <link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/niceCountryInput.css")}}">
        <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">

        <title>RED Pyramid</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="main-layout">
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#"/></div>
         </div>   
        <div class="container" style="padding: 0;">  
            @include('sections.top-header')
            <section>
                @yield('content')
            </section>
            @include('sections.footer')
        </div>

        <script src="{{asset("js/jquery.min.js")}}"></script>
        <script src="{{asset("js/jquery-3.0.0.min.js")}}"></script>
        <script src="{{asset("js/jquery.nice-select.min.js")}}"></script>
        <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
        <!-- sidebar -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{asset("js/bootstrap-datepicker.min.js")}}"></script>
        <script src="{{asset("js/niceCountryInput.js")}}"></script>
        <script src="{{asset("js/custom.js")}}"></script>
        <script>  AOS.init();</script>  
    </body>
    <script>
        $(window).on('load', function() {
        // Set a timeout to start the animation after one second
        setTimeout(function() {
            // Select the header element by its ID
            var header = $('#animate-from-top');
            var header2 = $('#animate-from-bottom');
            var p = $('#head-p');

            // Add a class to trigger the animation
            header.addClass('animate-header-top');
            header2.addClass('animate-header-top');
            p.addClass('animate-header-left');
        }, 500); // 1000 milliseconds = 1 second
    });
        @stack('js_content')
    </script>