<?php

Route::group(['middleware'=>  'web'], function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
    Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Auth::routes();
});
    /*
     * usuários
     */
Route::get('/usuarios/lista', [\App\Http\Controllers\UsuariosController::class,'index'])->name('usuarios.lista');
Route::get ('/usuarios', [\App\Http\Controllers\HomeController::class,'index'])->middleware('auth');
Route::post('/usuarios', [\App\Http\Controllers\UsuariosController::class,'add'])->middleware('auth');
Route::get('usuarios/{id}/edit', [\App\Http\Controllers\UsuariosController::class,'edit'])->middleware('auth');
Route::post('/usuarios/update/{id}', [\App\Http\Controllers\UsuariosController::class,'update']);
Route::delete('usuarios/delete/{id}', [\App\Http\Controllers\UsuariosController::class,'delete']);





