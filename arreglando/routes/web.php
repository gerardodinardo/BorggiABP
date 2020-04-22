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

//registro de usuarios

Route::group(['middleware' => ['auth']],function(){
    
    
    Route::get('/crearUsuari','Auth\RegisterController@index')->name('crearUsuari');
    Route::post('/register','Auth\RegisterController@register')->name('register');
    Route::get('/historicIncidencies', 'IncidenciaController@indexHistoricIncidencies');
    Route::post('/historicIncidencies', 'IncidenciaController@indexHistoricIncidencies');
    //TEST DENTRO MIDDLE
    Route::resource('/principalIncidencies', 'IncidenciaController');
    Route::resource('/alertantCentreSanitari', 'AlertantController');
    Route::get('/alertantVIP', 'AlertantController@indexAlertantsVIP');
    Route::resource('/addIncidencia', 'IncidenciaController');
    Route::get('/editarRecurs', function () 
    {
        return view('editarRecurs');
    });
    // Route::get('/addIncidencia', function () {

    //     return view('addIncidencia');
    // });
    Route::get('/gestioAlertants', function () {
        return view('gestioAlertants');
    });
    Route::get('/contacte', function () {
        return view('contacte');
    });


    Route::get('/gestioRecursos', function () {
        return view('gestioRecursos');
    });


    Route::get('/nouRecursMobil.blade', function(){
        return view('nouRecursMobil');
    });

    Route::post('/nouRecursMobil', 'RecursMobilController@store');

});


    
//esto es el loggin principal, el que viene siendo el index.
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');;
Route::post('/login','Auth\LoginController@login');

//logout function
Route::get('/logout','Auth\LoginController@logout')->name('logout');
