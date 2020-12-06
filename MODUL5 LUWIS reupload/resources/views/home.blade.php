<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | @yield('title')</title>
   <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light align-content-center mb-3">
   <div class="justify-content-center" style="margin-left:500px;">
      <a class="navbar-brand" href="/home">HOME</a>
      <a class="navbar-brand" href="{{ route('product.index') }}">PRODUCT</a>
      <a class="navbar-brand" href="{{ route('order.index') }}">ORDER</a>
      <a class="navbar-brand" href="{{ route('history.index') }}">HISTORY</a>
   </div>
</nav>
@yield('content')
<script src="{{ asset('bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script>
   $('#notif').fadeTo(2000, 500).slideUp(500, function(){
      $('#notif').slideUp(500);
   });
</script>
</body>
</html>