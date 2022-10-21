<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //

    public function index(){
        $departamentos = Departamento::all();
        return view('site.sobreNos', ['departamentos' => $departamentos]);
    }
}
