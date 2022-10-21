<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Blogue;
use App\Models\Consulta;
use App\Models\Contacto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quantDepartamentos = Departamento::all()->count();
        $quantBlogues = Blogue::all()->count();
        $quantConsulta = Consulta::all()->count();
        $quantContacto = Contacto::all()->count();
        return view('home',['quantDepartamentos' => $quantDepartamentos,'quantBlogues' => $quantBlogues, 'quantConsulta' => $quantConsulta,'quantContacto' => $quantContacto]);
    }
}
