<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class UsuariosController extends Controller
{
    public function index (){
        $usuarios = User::get();
        return view( 'Usuarios.list', ['usuarios' => $usuarios]);
    }
    public function new (){
        return view('Usuarios.Form');
    }
    public function add( Request $request){
        $usuario = new User;
        $usuario = $usuario->create( $request->all());
        return Redirect::to('/usuarios');
    }
    public function edit( $id ){
        $usuario = User::findOrFail( $id );
        return view('Usuarios.Form', ['usuario' => $usuario]);
    }
    public function update( $id, Request $request){
        $usuario = User::findOrFail( $id );
        $usuario ->Update( $request->all());
        \Session::flash('msg_update', 'Atualizado com sucesso!' );
        return Redirect::to('usuarios/lista');
    }
    public function delete( $id ){
        $usuario = User::findOrFail( $id );
        $usuario ->delete();
        return Redirect::to('usuarios/lista');
    }
}
