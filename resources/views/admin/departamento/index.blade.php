@extends('layouts.admin')

@section('content')
    
 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Postar Departamento</h6>
                            @if(isset($departamento->id))
                                <form method="Post" action="{{ route('departamento.update', ['departamento' => $departamento->id]) }}" enctype="multipart/form-data" id="departamento-form">  
                                    @csrf
                                    @method('PATCH')
                                @else
                                <form method="Post" action="{{ route('departamento.store') }}" enctype="multipart/form-data" id="departamento-form">  
                                    @csrf
                                @endIf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Cirurgia" name="nome" value={{ $departamento->nome ?? old('nome') }}>
                                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                                <label for="floatingInput">Título</label>
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;" name="descricao" value={{ $departamento->descricao ??  old('descricao')}} >
                                    {{  $departamento->descricao ?? '' }}
                                </textarea>
                                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                                <label for="floatingTextarea">Descrição</label>
                            </div>

                            <div>
                           
                                <a style="width: 120px; font-size: 1rem; float: right; padding-bottom: 4px ; margin: 10px; font-weight: bold;"
                                    class="btn btn-sm btn-success" href="" onclick="event.preventDefault();
                                                     document.getElementById('departamento-form').submit();">{{isset($departamento->id) ? 'Actualizar': 'Postar'}}</a>
                            </div>
                            </form>
                        </div>
                    </div>

                                                <!-- Recent Sales Start -->
                                            <div class="col-sm-12 col-xl-12">
                                                <div class="bg-secondary text-center rounded p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <h6 class="mb-0">Departamentos</h6>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                            <thead>
                                                                <tr class="text-white">
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Nome</th>
                                                                    <th scope="col">Descrição</th>
                                                                    <th scope="col">Acção</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($departamentos as  $departamento)
                                                                <tr>
                                                                    <th scope="row">{{$departamento->id}}</th>
                                                                    <td>{{$departamento->nome}}</td>
                                                                    <td>{{$departamento->descricao}}</td>
                                                                    <td>
                                                                        <a class="btn btn-sm btn-primary" onclick="document.getElementById('form_{{$departamento->id}}').submit()">Eliminar</a>
                                                                        <form id="form_{{$departamento->id}}" method="post" action="{{route('departamento.destroy',['departamento' => $departamento->id])}}">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                        </form>
                                                                        <a class="btn btn-sm btn-success" href="{{route('departamento.edit',['departamento' => $departamento->id])}}">Editar</a>
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
