<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipuAlertant;
use App\Models\TipusIncident;
use App\Models\Comarca;
use App\Models\Provincia;
use App\Models\Municipi;
use App\Models\EstatIncidencia;
use Illuminate\Database\QueryException;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencies = Incidencia::orderby('hora')->paginate(10);
        $data['incidencies'] = $incidencies;
        return view('principalIncidencies', $data);
    }
    public function indexHistoricIncidencies()
    {
        $incidencies = Incidencia::orderby('data')->paginate(10);//EN HISTORICO LOS LLAMO POR DATAS
        $data['incidencies'] = $incidencies;
        return view('historicIncidencies', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comarques = Comarca::all();
        $municipis = Municipi::all();
        $provincies = Provincia::all();
        $tipusIncidents = TipusIncident::all();
        $tipusAlertants = TipuAlertant::all();
        $estats = EstatIncidencia::all();


        $data['comarques'] = $comarques;
        $data['municipis'] = $municipis;
        $data['provincies'] = $provincies;
        $data['tipusAlertants'] = $tipusAlertants;
        $data['tipusIncidents'] = $tipusIncidents;
        $data['estats'] = $estats;

        return view('addIncidencia', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        //
    }
}
