<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('frontend/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/styles/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/styles/style.css')}}">
  <link href="{{url('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">



    {{-- @include('includes.style') --}}
    </head>
  <body>

<div class="container mt-5 pt-5 mb-5">
                            <div class="row center-kop">
                                 <img class="mr-4" style="width: 100%" src="{{url('frontend/img/logo-polres-batang-black.png')}}" alt="">
                            </div>
</div>

    @yield('content')

    <div class="container mt-4 mb-5" style="text-align: center">
        <a class="navbar-brand btn btn-light" style="" href="/"><i class="fas fa-arrow-left" style="font-size: 16px"></i> Kembali</a>
    </div>

    </body>
    <script src="{{url('frontend/scripts/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('frontend/scripts/bootstrap.min.js')}}"></script>
</html>
