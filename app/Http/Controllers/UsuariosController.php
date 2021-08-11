<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;



class UsuariosController extends Controller
{
    public function index (){
        $usuarios = Usuario::get();
        return view(    'Usuarios.list', compact('usuarios'));
    }
    public function new (){
        return view('Usuarios.Form');
    }
}
