@extends('layouts.site')

@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Sobre Nós</span>
          <h1 class="text-capitalize mb-5 text-lg">Saiba mais sobre nós</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">Cuidados médicos para a sua saúde</h2>
			</div>
			<div class="col-lg-8">
				<p>Clínica Paulo e Paula, uma instituição de renomada, comindex os melhores serviços de saúde e um atendimento de excelência.</p>
				<img src="images/about/logo.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="{{asset('img/about/cria.jpg')}}" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Cuidados para crianças</h4>
					<p>A clínica Paulo e Paula é uma óptima escolha para a saúde dos seus filhos.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="{{asset('img/about/seguro.png')}}" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Seguro de família</h4>
					<p>Já pensou em beneficar-se de um seguro de família? Na clínica Paulo e Paula velamos pelo bem estar da sua família.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="{{asset('img/about/im-2.jpg')}}" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Equipamentos Modernos</h4>
					<p>A clínica Paulo e Paula dispõe de Equipamentos modernos para cuidar da sua saúde.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item">
					<img src="{{asset('img//about/im-3.jpg')}}" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Doctores Qualificados</h4>
					<p>A clínica Paulo e Paula tem ao seu dispor Doctores e Especialistas que juntos trabalharão para servir as necessidades.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection