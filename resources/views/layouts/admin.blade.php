<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>admin @yield('title') </title>
 <link rel="Stylesheet" href="{{URL::to('css/admin.css')}}">
 @yield('styles')
 </head>
<body>
  <div class="header">
  @include('includes.admin-header')
  </div>
  <div class="container">
  <div class="links">
    @yield('links')
  </div>
  <div class="main">
    @yield('content')
  </div>
  </div>
  @yield('includes.footer')

  <script type="text/javascript">
    var baseUrl ="{{URL::to('/')}}";
  </script>
  @yield('scripts')

</body>
</html>
