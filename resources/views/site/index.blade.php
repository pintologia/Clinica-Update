@extends('layouts.site')

@section('content')

<!-- Slider Start -->

@include('site._partials.carousel')


<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
                        <i class="bi bi-person-video2"></i>
						</div>
						<span>24 horas de serviço</span>
						<h4 class="mb-3">Marcação online</h4>
						<p class="mb-4">Receba o suporte a tempo inteiro de cuidados para a saúde sua família.</p>
						<a href="{{route('consulta.index')}}" class="btn btn-main btn-round-full">Marcar consulta</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
                        <i class="bi bi-clock-history"></i>
						</div>
						<span>Horário</span>
						<h4 class="mb-3">Horários de trabalho</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Seg - Dom : <span>24/24h</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
                        <i class="bi bi-telephone"></i>
						</div>
						<span>Em caso de emergência</span>
						<h4 class="mb-3">+244-943-981-033 <br> +244-990-981-033 </h4>
						<p>Obtenha suporte permanente para emergências. Introduzimos o princípio da medicina familiar. Conecte-se conosco para
						qualquer urgência .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="{{asset('img/IMG_9007.jpg')}}" alt="" class="img-fluid">
					<img src="{{asset('img/IMG_9066.jpg')}}" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="{{(asset('img/IMG_8964.jpg'))}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Saúde <br>E Cuidados Pessoais</h2>
					<p class="mt-4 mb-5">Nos dedicamos à fornecer o melhor serviço e cuidados médico para sí e sua família.</p>

					<a href="{{route('servico')}}" class="btn btn-main-2 btn-round-full btn-icon">Serviços<i class="bi bi-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="{{(asset('img/IMG_8996.jpg'))}}" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>  +943 981 033 <br> <i class="icofont-phone-circle text-lg"></i> +990 981 033</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Marque a sua consulta</h2>
					<p class="mb-4">A clínica Paulo e Paula fornece-lhe a possiblidade de realizar a marcação da sua consulta online, de modo a evitar filas no atendimento, basta que preencha os campos devidamente e aguarde por uma ligação.</p>
					     <!--component formulario para consulta-->
            
						 @component('site._components.form_consulta',)
            @endcomponent
			
			</div>
			</div>
		</div>
	</div>
</section>

@endsection