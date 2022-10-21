@extends('layouts.admin')

@section('content')
    
 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">


                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Criar Usuário</h6>
                            @if(isset($user->id))
                                <form method="Post" action="{{ route('user.update', ['user' => $user->id]) }}" enctype="multipart/form-data" id="user-form">  
                                    @csrf
                                    @method('PATCH')
                                @else
                                <form method="Post" action="{{ route('user.store') }}" enctype="multipart/form-data" id="user-form">  
                                    @csrf
                                @endIf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder=" Adão Pedro" name="name" value="{{ $user->name ?? old('name') }}">
                                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                                <label for="floatingInput">Nome</label>
                            </div>
                            
                            <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="email" value={{ $user->email ?? old('email') }}>
                                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                                <label for="floatingInput">Email</label>
                            </div>
                        @if(!isset($user->id))
                            <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInput"
                                    placeholder="*pedro123*" name="password" value={{ $user->password ?? old('password') }}>
                                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                                <label for="floatingInput">Password</label>
                            </div>
                         @endif

                            <div>
                           
                                <a style="width: 120px; font-size: 1rem; float: right; padding-bottom: 4px ; margin: 10px; font-weight: bold;"
                                    class="btn btn-sm btn-success" href="" onclick="event.preventDefault();
                                                     document.getElementById('user-form').submit();">{{isset($user->id) ? 'Actualizar': 'Criar'}}</a>
                            </div>
                            </form>
                        </div>
                    </div>

                                                <!-- Recent Sales Start -->
                                            <div class="col-sm-12 col-xl-12">
                                                <div class="bg-secondary text-center rounded p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <h6 class="mb-0">users</h6>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                            <thead>
                                                                <tr class="text-white">
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Password</th>
                                                                    <th scope="col">Nível</th>
                                                                    <th scope="col">Acção</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($users as  $user)
                                                                <tr>
                                                                    <th scope="row">{{$user->id}}</th>
                                                                    <td>{{$user->name}}</td>
                                                                    <td>{{$user->email}}</td>
                                                                    <td>{{$user->password}}</td>
                                                                    <td>{{$user->admin ? 'admin' : 'Funcionário'}}</td>
                                                                    <td>
                                                                        @if(!$user->admin)
                                                                        <a class="btn btn-sm btn-primary" onclick="document.getElementById('form_{{$user->id}}').submit()">Eliminar</a>
                                                                        <form id="form_{{$user->id}}" method="post" action="{{route('user.destroy',['user' => $user->id])}}">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                        </form>
                                                                        <a class="btn btn-sm btn-success" href="{{route('user.edit',['user' => $user->id])}}">Editar</a>
                                                                        @endif
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
