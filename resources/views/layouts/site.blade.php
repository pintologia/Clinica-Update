<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>C. PauloePaula</title>

     <!-- Scripts -->
    @vite(['resources/js/app.js', 
                 'public/css/carousel.css', 
                 'public/css/carousel/carousel.css',
                 'public/js/bootstrap.bundle.min.js', 'resources/js/site.js', 'public/css/carousel/bootstrap.min.css'])
    
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

<link rel="shortcut icon" href="/images/fav/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/fav/favicon.ico" type="image/x-icon">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/styleSite.css')}}">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
</head>

<body id="top">

<!--menu topo-->
@include('site._partials.topo')
	

<!--content body-->
<main>
    @yield('content')
</main>

<!--footer-->
@include('site._partials.footer')
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
