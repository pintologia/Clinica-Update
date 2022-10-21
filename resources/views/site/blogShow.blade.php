<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>C. PauloePaula</title>

	@vite(['resources/js/app.js'])
    @vite(['resources/js/site.js'])
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
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<nav class="navbar bg-light container">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url()->previous() }}">Voltar</a>
  </div>
</nav>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	

	<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="{{Storage::url($blogue->imagem)}}" alt="" class="img-fluid ">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>{{$blogue->created_at}}</span>
				</div> 

				<h2 class="mt-3 mb-3"><a href="#">{{$blogue->titulo}}</a></h2>

				<p class="mb-4" style="text-align:justify;">{{$blogue->descricao}}</p>
			</div>
		</div>
	</div>


</div>
</div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	<div class="sidebar-widget search  mb-3 ">
	</div>


	
	<div class="sidebar-widget category mb-3">
		<h5 class="mb-4">Departamentos</h5>

		<ul class="list-unstyled">
        @foreach($departamentos as $departamento)
		  <li class="align-items-center">
		    <a href="#">{{$departamento->nome}}</a>
		  </li>
		  @endforeach
		</ul>
	</div>


	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">Tags</h5>

		<a href="#">Doctores</a>
		<a href="#">Atendimento</a>
		<a href="#">Clínica geral</a>
		<a href="#">Medicina</a>
		<a href="#">Cirurgia</a>
		<a href="#">Marketing</a>
		<a href="#">Social Media</a>
		<a href="#">Laboratório</a>
	</div>


	<div class="sidebar-widget schedule-widget mb-3">
		<h5 class="mb-4">Horário de Trabalho</h5>

		<ul class="list-unstyled">
		  <li class="d-flex justify-content-between align-items-center">
		    <a href="#">Segunda - Domingo</a>
		    <span>24/24h</span>
		  </li>
		  
		</ul>

		<div class="sidebar-contatct-info mt-4">
			<p class="mb-0">Para emergências?</p>
			<h3>+943-981-033</h3>
		</div>
	</div>

    </div>
 </div>   
</div>



</section>


    

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Clínica Paulo e Paula, uma instituição de referência, edificada para prestar serviços de saúde.
					</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://web.facebook.com/profile.php?id=100063725611596"><i class="bi bi-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/clinicapaulo_paula/"><i class="bi bi-instagram"></i></a></li>
						<li class="list-inline-item "><a href="#"><i class="bi bi-linkedin "></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Departamentos</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
					@foreach($departamentos as $departamento)
					<li class="align-items-center">
						<a href="#">{{$departamento->nome}}</a>
					</li>
					@endforeach
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Suporte</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Suporte </a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Licença </a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Entre em contacto</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Suporte disponível 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">geral@clinicapauloepaula.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Seg à Dom : 24/24h</span>
						</div>
						<h4 class="mt-2"><a href="tel:+244-943-981-033">+244-943-981-033 <br> +244-990-981-033</a></h4>

					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reservado à <span class="text-color">Clínica Paulo & Paula</span> by <a href=""
							target="_blank">Scriptside</a>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
  

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>