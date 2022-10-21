@extends('layouts.site')

@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Marque o seu lugar</span>
          <h1 class="text-capitalize mb-5 text-lg">Consutas</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Ligue para emergências!</span>
              <h2 class="text-color mt-3">+943981033 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Marque uma consulta</h2>
            <p class="mb-4">A clínica Paulo e Paula fornece-lhe a possiblidade de realizar a marcação da sua consulta online, de modo a evitar filas
            no atendimento, basta que preencha os campos devidamente e aguarde por uma ligação.</p>
        
            <!--component formulario para consulta-->
            
            @component('site._components.form_consulta',)
            @endcomponent
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection