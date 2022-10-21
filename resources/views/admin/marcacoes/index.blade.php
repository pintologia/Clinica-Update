@extends('layouts.admin')

@section('content')
    
            @foreach($consultas as $consulta)
                <div class="card bg-secondary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$consulta->nome_consulta}}</h5>
                        
                        <h6 class="card-subtitle mb-2 text-muted">{{$consulta->tipo_consulta}}</h6>
                        <hr class="dropdown-divider">   
                        <h6 class="card-subtitle mb-2 text-muted">{{$consulta->data_consulta}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$consulta->hora}}</h6>
                        <hr class="dropdown-divider">
                        <h6 class="card-subtitle mb-2 text-muted">{{$consulta->nome}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$consulta->contacto}}</h6>

                        <p class="card-text">{{$consulta->mensagem}}</p>
                        <form id="form_{{$consulta->id}}" method="post" action="{{ route('consulta.update',['consultum' =>  $consulta->id])}}">
                                        @csrf
                                        @method('patch')
                                        </form>
                                        <a href="#" class="card-link" onclick="document.getElementById('form_{{$consulta->id}}').submit()">{{$consulta->atendido ? 'Cancelar' : 'Atender'}}</a>
                        
                        
                                        
                                        <a href="#" class="card-link" onclick="document.getElementById('formm_{{$consulta->id}}').submit()">Excluir</a>
                         <form id="formm_{{$consulta->id}}" method="post" action="{{ route('consulta.destroy', ['consultum' => $consulta->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        </form>
                        
                        <p><small>status: {{$consulta->atendido ? 'Atendido' : 'Não atendido'}}</small></p>
                    </div>
                </div>
            @endforeach

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
