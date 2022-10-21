<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        
        $this->middleware(['auth','verified']);
    }
    
    public function index(Request $request)
    {
        //
        $users = User::all();

        if(isset($request->user)){
            $user = User::where('id', $request->user)->get();
            //dd($user);
            return view('admin.user.index',['users' => $users, 'user' => $user[0]]);
           }else{
            return view('admin.user.index',['users' => $users]);
           }

        return view('admin.user.index',['users' => $users]);
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
            'name' => 'required|min:3',
            'email' => 'email|unique:users',
            'password' => 'required|min:3'
        ];
 
        $request->validate($regras);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        if( $user === null){
            return view('acesso-negado', ['msn' => ' Desculpe, informação inexistente']);
        }   
         return redirect()->route('user.index', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $regras = [
            'name' => 'required|min:3',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
        ];
    
           $request->validate($regras);
    
           $user->name = $request->name;
           $user->email = $request->email;
           $user->save();
         
           //redirect
           return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('user.index');
    }
}
