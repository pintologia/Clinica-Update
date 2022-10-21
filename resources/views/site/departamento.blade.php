@extends('layouts.site')

@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Departamentos</span>
          <h1 class="text-capitalize mb-5 text-lg">Conheça os nossos departamentos</h1>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>A clínica paulo e paula dispõe dos seguintes departamentos:</h2>
					<div class="divider mx-auto my-4"></div>
				</div>
			</div>
		</div>

		
		<div class="row">
		@foreach($departamentos as $departamento)
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{$departamento->nome}}</h4>
						<p class="mb-4" style="text-align:justify;">{{$departamento->descricao}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection