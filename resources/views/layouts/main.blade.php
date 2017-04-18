<!DOCTYPE html>
<html>
  <head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
    @yield('style')
  </head>
<body>
  <div class="wrapper">
  <div class="header1">
  @include('includes.header')
  </div>
  <div class="content">
    <div class="header2">
    @include('includes.header2')
  </div>
  <div class="main">
    @yield('content')
  </div>

  </div>
  @yield('includes.footer')
  </div>
</body>

</html>
