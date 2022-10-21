@extends('layouts.site')

@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contactos</span>
          <h1 class="text-capitalize mb-5 text-lg">Entre em contacto!</h1>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Ligue-nos</h5>
                    +943-981-033 <br>
					+990-981-033
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                    geral@clinicapauloepaula.com
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Localização</h5>
                     Viana, Luanda Sul, junto aos quatro campos.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contacte-nos</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Entre em contacto com apenas um clique.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

            <form method="Post" action="{{ route('contacto.store') }}"class="contact__form "id="contacto-form">  
                  @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nome" id="name" type="text" class="form-control" placeholder="Nome completo" value={{ old('nome') }} >
                                {{$errors->has('nome') ? $errors->first('nome') : ''}}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Endereço de e-mail" value={{ old('email') }}>
                                {{$errors->has('email') ? $errors->first('email') : ''}}
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="assunto" id="subject" type="text" class="form-control" placeholder="Assunto" value={{ old('assunto')}} >
                                    {{$errors->has('assunto') ? $errors->first('assunto') : ''}}
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="contacto" id="phone" type="text" class="form-control" placeholder="Número de telefone" value={{ old('contacto')}} >
                                    {{$errors->has('contacto') ? $errors->first('contacto') : ''}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="mensagem" id="message" class="form-control" rows="8" placeholder="Mensagem" value={{ old('mensagem') }}>{{$contacto->mensagem ?? '' }}</textarea>
                        {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Enviar mensagem"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection