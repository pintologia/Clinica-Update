<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Departamento;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        
        $this->middleware(['auth','verified'])->except(['store', 'index']);
    }

    public function index()
    {
        //
        if( isset(auth()->user()->id)){
            $consultas = Consulta::all()->reverse();
            return view('admin.marcacoes.index', ['consultas' => $consultas]);
        }else{
            $consultas = Consulta::all();
            $departamentos = Departamento::all();
            return view('site.marcarConsulta', ['consultas' => $consultas, 'departamentos'=> $departamentos]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd($request);
        $regras = [
            'nome' => 'required|min:3|max:40',
            'contacto' => 'required',
            'nome_consulta' => 'required',
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        
        $request->validate($regras, $feedback);

        Consulta::create($request->all());
        $departamentos = Departamento::all();
         return view('site.confirmacao',['msg' => 'Agradecemos pela sua marcação', 'departamentos' => $departamentos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consulta  $consultum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consultum)
    {
        //
     
        if(auth()->user()->id){

            if($consultum->atendido === null || $consultum->atendido === 0){
                $consultum->atendido = true;
                $consultum->save();
            }else{
                $consultum->atendido = false;
                $consultum->save();
            }
            
        }
        return redirect()->route('consulta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consulta  $consultum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consultum)
    {
        //
       // dd($consultum);
        $consultum->delete();
        return redirect()->route('consulta.index');
    }
}
