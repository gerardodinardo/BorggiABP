<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/addIncidencia', function () {
    
    return view('addIncidencia');
});
Route::get('/crearUsuari', function () {
    return view('crearUsuari');
});

Route::get('incidenciesTotals', function () {
    return view('incidenciesTotals');
});

