@extends('layouts.site')

@section('content')



<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Nossos Serviços</span>
          <h1 class="text-capitalize mb-5 text-lg">O que nós fazemos?</h1>
			<div class="btn-container " >
				<a href="{{route('consulta.index')}}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Marcar consulta <i
						class="icofont-simple-right ml-2  "></i></a>
			</div>
          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>




<section class="section service-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/geral.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Clínica geral</h4>
						<p class="mb-4">O profissional faz diagnósticos, pede exames e prescreve medicamentos.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/surgical_sterilization@2x.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Cirurgia</h4>
						<p class="mb-4">Cirurgia é o ramo da medicina que se dedica ao tratamento das doenças, lesões, ou deformidades</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/ministry_of_health@2x.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Analises clínicas</h4>
						<p class="mb-4">Conjunto de exames e testes realizados em laboratórios de análises clínicas visando um diagnóstico ou confirmação de uma patologia ou para um check-up.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/obstetricsmonia@2x(2).png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Ecografia</h4>
						<p class="mb-4">A ultrassonografia ou ecografia é um método diagnóstico muito recorrente na medicina moderna que utiliza o eco gerado através de ondas ultrassônicas</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/heart_cardiogram@2x(1).png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Ecocardiograma</h4>
						<p class="mb-4">Abrange os métodos de diagnóstico da estrutura e do funcionamento do coração baseados no uso de ultrassom.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/xray@2x.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Radiografia</h4>
						<p class="mb-4">Radiografia é uma técnica de exame de imagem que utiliza raios X para ver um material cuja composição não é uniforme como o corpo humano. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/obstetricsmonia@2x(1).png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Obstetrícia</h4>
						<p class="mb-4">A obstetrícia é o ramo da medicina que estuda a reprodução na mulher.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/heart_cardiogram@2x.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Eletrocardiograma</h4>
						<p class="mb-4">Um eletrocardiograma é a reprodução gráfica da atividade elétrica do coração durante o seu funcionamento.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/pedi.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2  title-color">Pediatria</h4>
						<p class="mb-4">O pediatra desenvolve ações como orientação aos pais para garantir um crescimento e
						desenvolvimento saudáveis aos filhos, como o aleitamento materno e a prevenção de acidentes, além de realizar
						imunizações e vacinas.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/gine.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Ginecologia</h4>
						<p class="mb-4">​​​​​A Ginecologia é a especialidade médica que cuida da saúde da mulher em todas as fases da vida.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/fam.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Planeamento Familiar</h4>
						<p class="mb-4">O objetivo do planejamento familiar é garantir que qualquer casal, homem ou mulher que tenha um filho tenha os recursos
						necessários para cumprir essa meta.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/infe.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Infertilidade</h4>
						<p class="mb-4">Infertilidade é a dificuldade de um casal obter gravidez no período de um ano tendo relações sexuais sem uso de nenhuma
						forma de anticoncepção.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/neu.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Neurologia</h4>
						<p class="mb-4">A neurologia é a especialidade médica que cuida de pessoas com doenças e desordens do Sistema Nervoso.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/endo.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Endocrinologia</h4>
						<p class="mb-4">O endocrinologista diagnostica e trata doenças relacionadas com os hormônios e o metabolismo.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/gas.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Gastroenterologia</h4>
						<p class="mb-4">O gastroenterologista é o profissional médico que cuida de todas as doenças relacionadas ao aparelho digestivo.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/psy.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Psicologia</h4>
						<p class="mb-4">Psicologia é a área da ciência que estuda a mente e o comportamento humano e as suas interações com o ambiente físico e
						social.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/card.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Cardiologia</h4>
						<p class="mb-4">O Cardiologista é aquele que cuida da saúde do coração.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/ort.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Ortopedia</h4>
						<p class="mb-4">O ortopedista acompanha e assegura a saúde do sistema locomotor, ou seja, de todos os sintomas.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/est.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Estomatologia</h4>
						<p class="mb-4">A Estomatologia é uma especialidade da odontologia que tem como finalidade prevenir, diagnosticar e tratar as doenças
						que se manifestam na cavidade da boca.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/heart_cardiogram@2x(1).png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Holter</h4>
						<p class="mb-4">Monitor Holter é um dispositivo portátil que monitora continuamente a atividade elétrica cardíaca de pacientes por 24 horas ou mais.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/oto.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Otorrinolaringologia</h4>
						<p class="mb-4">O otorrinolaringologista é o médico especializado no diagnóstico e tratamento, clínico e cirúrgico, das doenças dos
						ouvidos, nariz, garganta, laringe e pescoço.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/inte.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Medicina Interna</h4>
						<p class="mb-4">A Medicina Interna, de vocação essencialmente cognitiva, dedicada a tratamentos médicos não cirúrgicos.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/work.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Medicina de Trabalho</h4>
						<p class="mb-4">A consulta é realizada pelo médico do trabalho em uma espécie de entrevista, além de fazer exames simples.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/pneu.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Pneumologia</h4>
						<p class="mb-4">Pneumologia é a especialidade médica a qual é responsável pelo tratamento das patologias das vias aéreas inferiores.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/uro.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Urologia</h4>
						<p class="mb-4">A urologia é uma especialidade médico-cirúrgica que trata do diagnóstico e tratamento de doenças renais.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/prot.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Protologia</h4>
						<p class="mb-4">É o ramo da teologia que estuda as origens do universo e da vida segundo o ponto de vista fé.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/derma.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Dermatologia</h4>
						<p class="mb-4">O profissional dermatologista é especialista no diagnóstico, tratamento e prevenção de doenças da pele, mucosas,
						cabelos, unhas e pelos.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/nut.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Nutrição</h4>
						<p class="mb-4">O Nutricionista é o profissional de saúde capacitado para atuar na prevenção, promoção e recuperação da saúde humana.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/puer.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Puericultura</h4>
						<p class="mb-4">A puericultura é uma subespecialidade da pediatria que se preocupa com o acompanhamento integral do processo de
						desenvolvimento infantil.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="img/service/mat.png" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Maternidade</h4>
						<p class="mb-4">A maternidade é estruturada para favorecer o vínculo entre mãe e bebê.</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">Nós somos gratos em serví-lo <span class="title-color">Venha cuidar da sua saúde</span></h2>
					<a href="{{route('consulta.index')}}" class="btn btn-main-2 btn-round-full">Marcar consulta<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection