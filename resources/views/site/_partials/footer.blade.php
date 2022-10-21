
 <!-- footer Start -->
 <footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="{{asset('img/logo.png')}}" alt="" class="img-fluid">
					</div>
					<p>Clínica Paulo e Paula, uma instituição de referência, edificada para prestar serviços de saúde.</p>

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
						&copy; Copyright Reservado à <span class="text-color">Clínica Paulo & Paula</span> by <a href="" target="_blank">Scriptside</a>
					</div>
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

