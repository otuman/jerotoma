<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jerotoma') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('extra-css')
    <style>
        section#services{
            color: #fff;
            background-color: #ee6e73;
            border-color: #ee6e73;
        }
        .text-muted {
            color: #f5f8fa;
        }
    </style>

</head>
<body>
    <div id="app">
        <!-- Header -->
        @include('layouts.header')           
        <!-- End Header -->      
         <!-- Main Body Section -->          
        <section id="content">
              @yield('content')
        </section>
           
       <!-- End Main Body Section -->
       <!-- Footer -->
            @include('layouts.footer')  
     
         <!-- End Footer -->
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     @yield('extra-script')
</body>
</html>
