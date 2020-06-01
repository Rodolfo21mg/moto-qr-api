<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $usuario = Usuario::find($id);
        if(isset($usuario)){
            return view('index', compact('usuario'));
        }
    }

    public function login(Request $request)
    {
       $usuario = Usuario::where('email',$request->email)->first();
         if(isset($usuario)){
             $senha = strval($usuario->senha);
            //if($senha == $request->senha){
                return json_encode($usuario);
           //}
          // else{
              // return 'Invalido1';
          // }
         }
         else{
             return 'Invalido';
        }     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->id = (string) random_int(100, 999);
        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->endereco = $request->endereco;
        $usuario->naturalidade = $request->naturalidade;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->profile = 'user2.jpg';
        $usuario->idade = $request->idade;
        $usuario->sangue = $request->sangue;
        $usuario->conveniomed = $request->conveniomed;
        $usuario->obsmed = $request->obsmed;
        $usuario->nomecont1 = $request->nomecont1;
        $usuario->telcont1 = $request->telcont1;
        $usuario->nomecont2 = $request->nomecont2;
        $usuario->telcont2 = $request->telcont2; 
        $usuario->save();
       
        return 'Cadastro realizado com sucesso!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return json_encode($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $usuario = Usuario::find($request->id);
        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->endereco = $request->endereco;
        $usuario->naturalidade = $request->naturalidade;
        $usuario->idade = $request->idade;
        $usuario->sangue = $request->sangue;
        $usuario->conveniomed = $request->conveniomed;
        $usuario->nomecont1 = $usuario->nomecont1;
        $usuario->telcont1 = $usuario->telcont1;
        $usuario->nomecont2 = $usuario->nomecont2;
        $usuario->telcont2 = $usuario->telcont2;
        $usuario->save();
        return 'Editador com sucesso!';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
