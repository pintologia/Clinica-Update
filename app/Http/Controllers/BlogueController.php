<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Blogue;
use App\Models\Departamento;
use Illuminate\Http\Request;

class BlogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Blogue $blogue) {
        $this->blogue = $blogue;
        $this->middleware(['auth','verified'])->except(['siteBlog','show']);
    }

    public function index(Request $request)
    {
        //
       // dd($request);
        $blogues = Blogue::all();

        if(isset($request->blogue)){
            $blogue = Blogue::where('id', $request->blogue)->get();
            //dd($blogue);
            return view('admin.blog.index',['blogues' => $blogues, 'blogue' => $blogue[0]]);
           }else{
            return view('admin.blog.index',['blogues' => $blogues]);
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
         //
         $request->validate($this->blogue->rules());

         // dd($request->all());
      if($request->file('imagem') != ""){
          $imagem = $request->file('imagem');
          $imagem_urn = $imagem->store('imagens', 'public');
      }else{
          $imagem_urn ="";
      }


          $blogue = $this->blogue->create([
              'imagem' => $imagem_urn,
              'titulo' => $request->titulo,
              'descricao' => $request->descricao,
              'user_id' => auth()->user()->id
          ]);

          return redirect()->route('blogue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogue  $blogue
     * @return \Illuminate\Http\Response
     */
    public function show(Blogue $blogue)
    {
        //
        $departamentos = Departamento::all();

        if( $blogue === null){
         return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente']);
     }
        
         return view('site.blogShow', ['blogue' => $blogue, 'departamentos' => $departamentos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogue  $blogue
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogue $blogue)
    {
        //
       // dd($blogue);
        
        if( $blogue === null){
            return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente']);
        }

        if($blogue->user_id == auth()->user()->id || auth()->user()->admin == 1){
            return redirect()->route('blogue.index', ['blogue' => $blogue]);
        }else{
            return view('acesso-negado', ['msn', 'Desculpe. Você não tem acesso a esse recurso.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogue  $blogue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $blogue = $this->blogue->find($id);
  
        if( $blogue === null){
            return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente']);
        }


        if($blogue->user_id == auth()->user()->id || auth()->user()->admin == 1){

        if($request->method() === 'PATCH') {

            $regrasDinamicas = array();

            //percorrendo todas as regras definidas no Model
            foreach($blogue->rules() as $input => $regra) {
                
                //coletar apenas as regras aplicáveis aos parâmetros parciais da requisição PATCH
                if(array_key_exists($input, $request->all())) {
                    $regrasDinamicas[$input] = $regra;
                }
            }
            $request->validate($regrasDinamicas);

        } else {
            $request->validate($blogue->rules());
        }
        
        //preenchendo o objeto $blogue com todos os dados do request
        $blogue->fill($request->all());

        //se a imagem foi encaminhada na requisição
        if($request->file('imagem')) {
            //remove o arquivo antigo
            if($blogue->imagem != ""){
                Storage::disk('public')->delete($blogue->imagem);
            }

            $imagem = $request->file('imagem');
            $imagem_urn = $imagem->store('imagens', 'public');
            $blogue->imagem = $imagem_urn;
        }

        $blogue->save();

        return redirect()->route('blogue.index');
    }else{
        return view('acesso-negado', ['msn', 'Desculpe. Você não tem acesso a esse recurso.']);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogue  $blogue
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $blogue = $this->blogue->find($id);

         if( $blogue === null){
             return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente']);
         }
 
         if($blogue->user_id == auth()->user()->id || auth()->user()->admin == 1){
                     //remove o arquivo antigo
                 Storage::disk('public')->delete($blogue->imagem);  
 
                 $blogue->delete();
                 return redirect()->route('blogue.index');
         }else{
             return view('acesso-negado', ['msn', 'Desculpe. Você não tem acesso a esse recurso.']);
         }
         
    }

    public function siteBlog(){
        $blogues = Blogue::paginate(3);
        $departamentos = Departamento::all();
        return view('site.blog', ['blogues' => $blogues, 'departamentos' => $departamentos]);
    }
}
