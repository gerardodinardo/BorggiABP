<?php

namespace App\Http\Controllers;

use App\Models\RecursMobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Incidencia;
use App\Models\TipuAlertant;
use App\Models\TipusIncident;
use App\Models\Comarca;
use App\Models\Provincia;
use App\Models\Municipi;
use App\Models\EstatIncidencia;
use Illuminate\Database\QueryException;

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
        $recurs->codi = $request->input('inputCodi');
        $recurs->tipus_recurs_id = $request->input('id_tipus');
       // $recurs->id_usuario = 1;
       
            $recurs->save();

            
        

            return view('nouRecursMobil');


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
