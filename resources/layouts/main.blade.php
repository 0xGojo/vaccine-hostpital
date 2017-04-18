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
  @yield('includes.header')
  <div class="main">
    @yield('content')
  </div>
  @yield('includes.footer')
</body>

</html>
