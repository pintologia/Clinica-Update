<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Departamento;
use Illuminate\Http\Request;

class ContactoController extends Controller
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
        $departamentos = Departamento::all();
        if( isset(auth()->user()->id)){
            $contactos = Contacto::all()->reverse();
            return view('admin.contacto.index', ['contactos' => $contactos]);
        }else{
            return view('site.contacto', ['departamentos' => $departamentos]);
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
        $regras = [
            'nome' => 'required|min:3|max:40',
            'email' => 'email',
            'assunto' => 'required|min:3|max:40',
            'contacto' => 'required',
            'mensagem' => 'required|min:10',
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido',
            'assunto.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'email' => 'deve ser um email',
            'mensagem.min' => 'deve ter no minimo 10 caracter esse campo'
        ];
        
        $request->validate($regras, $feedback);

        Contacto::create($request->all());
        $departamentos = Departamento::all();
         return view('site.confirmacao',['msg' => 'A sua mensagem foi enviada com sucesso', 'departamentos' => $departamentos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //

        if(auth()->user()->id){

            if($contacto->visto === null || $contacto->visto === 0){
                $contacto->visto = true;
                $contacto->save();
            }else{
                $contacto->visto = false;
                $contacto->save();
            }
            
        }
        return redirect()->route('contacto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
        $contacto->delete();
        return redirect()->route('contacto.index');
    }
}
