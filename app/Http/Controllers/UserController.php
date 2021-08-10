<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function listUser()
    {
//        $user = new User ();
//        $user-> name = 'estágio web';
//        $user->email = '';
//        $user-> password = Hash::make( value:'123');
//        $user->save();
//    echo "<h1>Listagem de Ususario </h1>";
       $user = User::where('id, '=', 1')->frist();
       dd($user);
    return view('list.User', [
        'userList' => $user
    ]);
    }
}

