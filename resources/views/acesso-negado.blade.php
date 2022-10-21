@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Acesso negado</div>

                <div class="card-body">
                    {{ $msn ?? '' != '' ? $msn ?? '' :'' }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
