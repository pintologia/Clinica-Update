@extends('layouts.admin')

@section('content')

 <!-- Form Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Postar notícia</h6>
                            @if(isset($blogue->id))
                                <form method="Post" action="{{ route('blogue.update', ['blogue' => $blogue->id]) }}" enctype="multipart/form-data" id="blogue-form">  
                                    @csrf
                                    @method('PATCH')
                                @else
                                <form method="Post" action="{{ route('blogue.store') }}" enctype="multipart/form-data" id="blogue-form">  
                                    @csrf
                                @endIf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Consultas com Descontos" name="titulo" value="{{ $blogue->titulo ?? old('nome') }}">
                                    {{ $errors->has('titulo') ? $errors->first('titulo') : '' }}
                                <label for="floatingInput">Título</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Carregar de imagem</label>
                                <input class="form-control bg-dark" type="file" id="formFile" name="imagem" value={{ $blogue->imagem ??  old('imagem')}}>
                                {{$errors->has('imagem') ? $errors->first('imagem') : ''}}
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="descricao" value={{ $blogue->descricao ??  old('descricao')}}> {{  $blogue->descricao ?? '' }}</textarea>
                                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                                <label for="floatingTextarea">Descrição</label>
                            </div>

                            <div>
                           
                           <a style="width: 120px; font-size: 1rem; float: right; padding-bottom: 4px ; margin: 10px; font-weight: bold;"
                               class="btn btn-sm btn-success" href="" onclick="event.preventDefault();
                                                document.getElementById('blogue-form').submit();">{{isset($blogue->id) ? 'Actualizar': 'Postar'}}</a>
                       </div>
                    </form>
                </div>
         </div>


                            <!-- Recent Sales Start -->
                                <div class="bg-secondary text-center rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h6 class="mb-0">Notícias</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                                            <thead>
                                                <tr class="text-white">
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Título</th>
                                                    <th scope="col">Imagem</th>
                                                    <th scope="col">Descricao</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blogues as  $blogue)
                                                <tr>
                                                    <th scope="row">{{$blogue->id}}</th>
                                                    <td>{{$blogue->titulo}}</td>
                                                    <th scope="row">{{$blogue->imagem}}</th>
                                                    <td>{{$blogue->descricao}}</td>
                                                    <td>
                                                    <a class="btn btn-sm btn-primary" onclick="document.getElementById('form_{{$blogue->id}}').submit()">Eliminar</a>
                                                    <form id="form_{{$blogue->id}}" method="post" action="{{route('blogue.destroy',['blogue' => $blogue->id])}}">
                                                                            @method('DELETE')
                                                                            @csrf
                                                      </form>
                                                        <a class="btn btn-sm btn-success" href="{{route('blogue.edit',['blogue' => $blogue->id])}}">Editar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            <!-- Recent Sales End -->

                            
                </div>
        </div>
            <!-- Form End -->
        

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

     <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection