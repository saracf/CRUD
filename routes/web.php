<?php

Route::group(['middleware'=>  'web'], function(){
    Route::get('/', 'homecontroller@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/usuarios', 'UsuariosController@index');


