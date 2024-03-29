<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TipusIncident;
use App\Models\TipusRecurs;
use App\Models\TipuAlertant;
use App\Models\incidenciesHasRecursos;
use App\Models\Comarca;
use App\Models\Municipi;
use App\Models\Provincia;
use App\Models\EstatIncidencia;
use App\Models\Alertant;
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
    public function indexHistoricIncidencies(Request $request)
    {


            if($request->has('id_search')){//id_search_HISTORICO
                $incidencies = Incidencia::orderby('num_incidencia')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('historicIncidencies', $data);
            }
            else if($request->has('id_search_desc'))//id_search_desc_HISTORICO
            {


                $incidencies = Incidencia::orderby('num_incidencia','desc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('historicIncidencies', $data);
            }
            else if($request->has('search_date'))//search_date_HISTORICO
            {


                $incidencies = Incidencia::orderby('data', 'desc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('historicIncidencies', $data);
            }
            else if($request->has('search_date_asc'))//search_date_asc_HISTORICO
            {


                $incidencies = Incidencia::orderby('data', 'asc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('historicIncidencies', $data);
            }
            else if($request->has('id_search_prin'))//id_search_prin_PRINCIPAL
            {
                $incidencies = Incidencia::orderby('num_incidencia', 'asc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('principalIncidencies', $data);
            }
            else if($request->has('id_search_desc_prin'))//id_search_desc_prin_PRINCIPAL
            {
                $incidencies = Incidencia::orderby('num_incidencia','desc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('principalIncidencies', $data);
            }
            else if($request->has('search_date_desc_prin'))//search_date_prin_PRINCIPAL
            {
                $incidencies = Incidencia::orderby('data','desc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('principalIncidencies', $data);
            }
            else if($request->has('search_date_asc_prin'))//search_date_asc_prin_PRINCIPAL
            {

                $incidencies = Incidencia::orderby('data','asc')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('principalIncidencies', $data);
            }
            else
            {
                $incidencies = Incidencia::orderby('data')->paginate(10);
                $data['incidencies'] = $incidencies;
                return view('historicIncidencies', $data);
            }

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
        $alertants = Alertant::all();
        $incidencies = Incidencia::all();
        $tipusRecurs = TipusRecurs::all();


        $data['comarques'] = $comarques;
        $data['municipis'] = $municipis;
        $data['provincies'] = $provincies;
        $data['tipusAlertants'] = $tipusAlertants;
        $data['tipusIncidents'] = $tipusIncidents;
        $data['estats'] = $estats;
        $data['alertants'] = $alertants;
        $data['incidencies'] = $incidencies;
        $data['tipusRecurs'] = $tipusRecurs;
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
        //$lastValue = Incidencia::where('num_incidencia')->orderBy('num_incidencia', 'desc')->first();
        $incidencia = new Incidencia();
        $incidencia->num_incidencia = rand(1, 9999); //numero incidencia guarda el ultimo y suma 1
        $incidencia->telefon_alertant = $request->input('telefon');
        $incidencia->data = $request->input('data');
        $incidencia->hora = $request->input('hora');
        $incidencia->adreca = $request->input('adreca');
        $incidencia->complement_adreca = $request->input('complement_adreca');
        $incidencia->descripcio = $request->input('descripcio');
        $incidencia->municipis_id = $request->input('municipi');
        $incidencia->tipus_incident_id = $request->input('tipusIncident');
        $incidencia->estats_incidencia_id = $request->input('estat');
        $incidencia->tipus_alertant_id = $request->input('tipusAlertant');
        $incidencia->alertants_id = $request->input('id_alertant');
        

        $incidencia->save();
        $incidencia->recursosMobils()->attach($request->input('tipusRecurs'), ['prioritat' => $request->input('prioritat')]);
        
        //ATTACH
        //EJEMPLO WEB --> $ shop-> products () -> attach (1, ['products_amount' => 100, 'price' => 49.99]);

        // //$incidencia->recursosMobils()->attach($prioritat, ['prioritat'=>$prioritat]);

        //municipis_id, tipus_incident_id, estat_incidencia_id, tipusalertantID, alerantId

        //$incidencia->save();
       
        return redirect()->action('IncidenciaController@index');
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

    //ajax
    public function byProject($id)
    {
        Incidencia::where('project_id', $id)->get();
    }
}
