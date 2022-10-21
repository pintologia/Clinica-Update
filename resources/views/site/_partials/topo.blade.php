
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="geral@clinicapauloepaula.com"><i class="bi bi-envelope"></i> geral@clinicapauloepaula.com</a></li>
						<li class="list-inline-item"><i class="bi bi-geo-alt"></i>Luanda Sul, 4 campos, Qf2 Casa nº 7</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+244-943-981-033" >
							<span>Ligue-nos: </span>
							<span class="h4">943981033/990981033</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">

					@auth
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/home') }}">Área Administrativa</a>
			 		 </li>
                    @endauth

			  <li class="nav-item active">
				<a class="nav-link" href="{{route('inicio')}}">Início</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{route('sobreNos')}}">Sobre Nós</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{route('servico')}}">Serviços</a></li>
				<li class="nav-item"><a class="nav-link" href="{{route('site.departamento')}}">Departamentos</a></li>
				<li class="nav-item"><a class="nav-link" href="{{route('site.blog')}}">Notícias e Dicas</a></li>
				@if(! isset(Auth::user()->id))
			   <li class="nav-item"><a class="nav-link" href="{{route('contacto.index')}}">Contactos</a></li>
			   @endif
			</ul>
		  </div>
		</div>
	</nav>
</header>