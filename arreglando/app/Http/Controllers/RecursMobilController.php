<?php

namespace App\Http\Controllers;

use App\Models\RecursMobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecursMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nouRecursMobil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $recurs = new RecursMobil();
        $recurs->titulo = $request->input('titulo');
        $recurs->director = $request->input('director');
        $recurs->id_pelicula = $request->input('id_pelicula');

       
            $recurs->save();

            
        

        return redirect()->action('PeliculaController@index')->withInput();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecursMobil  $recursMobil
     * @return \Illuminate\Http\Response
     */
    public function show(RecursMobil $recursMobil)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecursMobil  $recursMobil
     * @return \Illuminate\Http\Response
     */
    public function edit(RecursMobil $recursMobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecursMobil  $recursMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecursMobil $recursMobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecursMobil  $recursMobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecursMobil $recursMobil)
    {
        //
    }
}
