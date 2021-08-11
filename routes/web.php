<?php

Route::group(['middleware'=>  'web'], function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
    Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Auth::routes();
});
Route::get('/usuarios/lista', [\App\Http\Controllers\UsuariosController::class,'index'])->name('usuarios.lista');
Route::get ('/usuarios', [\App\Http\Controllers\HomeController::class,'index']);
Route::post('/usuarios', [\App\Http\Controllers\UsuariosController::class,'add']);

