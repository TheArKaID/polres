<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('frontend/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/styles/font-awesome.min.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Homepage</a>
    </nav>
    <nav class="navbar navbar-light bg-light mb-3">


    </nav>
    @yield('content')

    </body>
    <script src="{{url('frontend/scripts/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('frontend/scripts/bootstrap.min.js')}}"></script>
</html>
