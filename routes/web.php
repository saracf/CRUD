<?php

use Illuminate\Support\Facades\Route;



Route: get(function () {
return view(view'welcome');
},
    '');
Route:: get ('listagem-usuario', 'UserControllerlistUser');
Route::verb('uri', 'Contoler@,method')->name('route_name');
Route::get('usuarios', 'Form\\TestContoller@listAllUsers')->('usuaio')



