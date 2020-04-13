<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
;
//esto es el loggin principal, el que viene siendo el index.
Route::get('/login','Auth\LoginController@showLoginForm');

Route::get('/', function () {
    return view('index');
});


Route::post('/login','Auth\LoginController@login');

Route::get('/addIncidencia', function () {
    
    return view('addIncidencia');
});
Route::get('/crearUsuari', function () {
    return view('crearUsuari');
});

Route::get('incidenciesTotals', function () {
    return view('incidenciesTotals');
});

Route::get('/principalIncidencies', function () {
    return view('principalIncidencies');
});

Route::get('/contacte', function () {
    return view('contacte');
});

//login y registro de usuarios


//Route::get('/logout','Auth\LoginController@logout')->name('logout');//si pongo el name le puedo llamar por el route,.
//
////registre per als usuaris
Route::post('/register','Auth\RegisterController@register')->name('register');