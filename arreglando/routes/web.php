<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
;


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
Route::get('/editarRecurs', function () {
    return view('editarRecurs');
});

//egistro de usuarios

Route::group(['middleware' => ['auth']],function(){
 
    Route::get('/crearUsuari','Auth\RegisterController@index')->name('crearUsuari');
    Route::post('/register','Auth\RegisterController@register')->name('register');

});
    
//esto es el loggin principal, el que viene siendo el index.
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');;
Route::post('/login','Auth\LoginController@login');

//logout function
Route::get('/logout','Auth\LoginController@logout')->name('logout');
