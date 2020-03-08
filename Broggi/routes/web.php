<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/crearUsuari', function () {
    return view('crearUsuari');
});

Route::get('incidenciesTotals', function () {
    return view('incidenciesTotals');
});

