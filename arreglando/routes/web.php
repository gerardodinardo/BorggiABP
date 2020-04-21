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

//meter en Middleware al acabar.
Route::get('/historicIncidencies', function () {
    return view('historicIncidencies');
});
//meter en Middleware al acabar.s
Route::get('/principalIncidencies', function () {
    return view('principalIncidencies');
});
//meter en Middleware al acabar.
Route::get('/contacte', function () {
    return view('contacte');
});
//meter en Middleware al acabar.
Route::get('/gestioRecursos', function () {
    return view('gestioRecursos');
});
//meter en Middleware al acabar.
Route::get('/gestioAlertants', function () {
    return view('gestioAlertants');
});

//meter en Middleware al acabar.
Route::get('/addIncidencia', function () {
    
    return view('addIncidencia');
});

//meter en Middleware al acabar.
Route::get('/editarRecurs', function () {
    return view('editarRecurs');
});

//ALERTANTS _____________________________________
// Route::get('/alertantCentreSanitari', function () {
//     return view('alertantCentreSanitari');
// });

//FINAL ALERTANTS _____________________________________

//Ruta Resource

//meter en Middleware al acabar.
Route::resource('/alertantCentreSanitari', 'AlertantController');

//Final Ruta Resource




//registro de usuarios

Route::group(['middleware' => ['auth']],function(){
 
    Route::get('/crearUsuari','Auth\RegisterController@index')->name('crearUsuari');
    Route::post('/register','Auth\RegisterController@register')->name('register');

});
    
//esto es el loggin principal, el que viene siendo el index.
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');;
Route::post('/login','Auth\LoginController@login');

//logout function
Route::get('/logout','Auth\LoginController@logout')->name('logout');
