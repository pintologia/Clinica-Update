@extends('layouts.admin')

@section('content')
    
            @foreach($contactos as $contacto)
            
            <div class="card bg-secondary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$contacto->nome}} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$contacto->created_at}}</h6>

                    <hr class="dropdown-divider">
                    <h6 class="card-subtitle mb-2 text-muted">{{$contacto->email}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$contacto->contacto}}</h6>
                    <hr class="dropdown-divider">
                    <h6 class="card-subtitle mb-2 text-muted">{{$contacto->assunto}}</h6>
            
                    <p class="card-text">{{$contacto->mensagem}}</p>
                    <form id="form_{{$contacto->id}}" method="post" action="{{ route('contacto.update',['contacto' =>  $contacto->id])}}">
                                        @csrf
                                        @method('patch')
                                        </form>
                                        <a href="#" class="card-link" onclick="document.getElementById('form_{{$contacto->id}}').submit()">{{$contacto->visto ? 'Não Visto' : 'Visto'}}</a>
                        
                        
                                        
                                        <a href="#" class="card-link" onclick="document.getElementById('formm_{{$contacto->id}}').submit()">Excluir</a>
                         <form id="formm_{{$contacto->id}}" method="post" action="{{ route('contacto.destroy', ['contacto' => $contacto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        </form>
                        
                        <p><small>status: {{$contacto->visto ? 'Visto' : 'Não Visto'}}</small></p>
                </div>
            </div>
            @endforeach

              <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
