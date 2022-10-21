@extends('layouts.site')

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Notícias</span>
          <h1 class="text-capitalize mb-5 text-lg">Mantenha-se informado.</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	
@foreach($blogues as $blogue)
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

				<p class="mb-4" style="text-align:justify;">{{mb_strimwidth($blogue->descricao, 0, 500, "...")}}</a></p>

				<a href="{{route('blogue.show',['blogue' => $blogue->id])}}" target="_blank" class="btn btn-main btn-icon btn-round-full">Ler mais <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div>
	</div>
@endforeach

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


        <div class="row mt-5">
            <div class="col-lg-8">
                <nav class="pagination py-2 d-inline-block">
                    <div class="nav-links">
                    <a class="page-numbers" href="{{$blogues->previousPageUrl()}}"><i class="bi bi-chevron-double-left"></i></a>
					@for( $i = 1; $i <= $blogues->lastPage(); $i++)
                        <span aria-current="page" class="page-numbers {{ $blogues->currentPage() == $i ? 'current' : '' }}">{{$i}}</span>
					@endfor 
                        <a class="page-numbers" href="{{$blogues->nextPageUrl()}}"><i class="bi bi-chevron-double-right"></i></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>


@endsection