<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //

    public function index(){
        $departamentos = Departamento::all();
        return view('site.servico', ['departamentos' => $departamentos]);
    }
}
