<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
;
//esto es el loggin principal, el que viene siendo el index.
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');;
Route::post('/login','Auth\LoginController@login');

Route::get('/', function () {
    return view('index');
});


Route::get('/historicIncidencies', function () {
    return view('historicIncidencies');
});

Route::get('/principalIncidencies', function () {
    return view('principalIncidencies');
});

Route::get('/contacte', function () {
    return view('contacte');
});

Route::get('/gestioRecursos', function () {
    return view('gestioRecursos');
});

Route::get('/gestioAlertants', function () {
    return view('gestioAlertants');
});


Route::get('/addIncidencia', function () {
    
    return view('addIncidencia');
});
//login y registro de usuarios


//Route::get('/logout','Auth\LoginController@logout')->name('logout');//si pongo el name le puedo llamar por el route,.
//
////registre per als usuaris
Route::post('/register','Auth\RegisterController@register')->name('register');

//Route::group(['middleware' => ['auth']],function(){
 
    Route::get('/crearUsuari','ControllerCrearUsuari@index')->name('crearUsuari');


//});
