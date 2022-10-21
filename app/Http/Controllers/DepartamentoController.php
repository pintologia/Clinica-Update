<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function __construct() {
        
        $this->middleware(['auth','verified'])->except(['siteDepartamento']);
    }
   public function index(Request $request)
   {
       //
       $departamentos = Departamento::all();

       if(isset($request->departamento)){
        $departamento = Departamento::where('id', $request->departamento)->get();
        //dd($departamento);
        return view('admin.departamento.index',['departamentos' => $departamentos, 'departamento' => $departamento[0]]);
       }else{
        return view('admin.departamento.index',['departamentos' => $departamentos]);
       }

      
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
     /** não usado o este método na aplicação, sem necessidade */
   public function create()
   {
       //
       $departamentos = Departamento::all();
       return view('admin.departamento.index',['departamentos' => $departamentos]);
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
       $regras = [
           'nome' => 'required|min:3|unique:departamento',
           'descricao' => 'required|min:3|unique:departamento',
           'user_id' => 'exists:users,id'
       ];

       $request->validate($regras);

      
       $Departamento_cadastrada = Departamento::create([
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'user_id' => auth()->user()->id
       ]);
       //redirect
       return redirect()->route('departamento.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Departamento  $departamento
    * @return \Illuminate\Http\Response
    */
    /** não usado o este método na aplicação, sem necessidade */
   public function show(Departamento $departamento)
   {
       //
      if( $departamento === null){
       return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente','departamento' => $departamento]);
   }
      
       return view('admin.departamento.index', ['departamento' => $departamento]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Departamento  $Departamento
    * @return \Illuminate\Http\Response
    */
   public function edit(Departamento $departamento)
   {
       //
       //$departamentos = Departamento::all();

       if( $departamento === null){
           return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente','departamento' => $departamento]);
       }   
        return redirect()->route('departamento.index', ['departamento' => $departamento]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Departamento  $departamento
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Departamento $departamento)
   {
       //

      // dd($request);
      $regras = [
        'nome' => 'required|min:3',
        'descricao' => 'required|min:3|unique:departamento',
        'user_id' => 'exists:users,id'
    ];

       $request->validate($regras);

       $departamento->nome = $request->nome;
       $departamento->descricao = $request->descricao;
       $departamento->save();
     
       //redirect
       return redirect()->route('departamento.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Departamento  $departamento
    * @return \Illuminate\Http\Response
    */
   public function destroy(Departamento $departamento)
   {
       //
       $departamento->delete();
       return redirect()->route('departamento.index');
   }

   public function siteDepartamento(){
    $departamentos = Departamento::all();
    return view('site.departamento', ['departamentos' => $departamentos]);
   }
}
