<?php

namespace App\Http\Controllers;

use App\Models\Alertant;
use App\Models\TipuAlertant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlertantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $search = $request->input('search');
            $alertants = Alertant::where('tipus_alertant_id','like',1)->where('nom', 'like', '%'.$search.'%')->orderby('nom')->paginate(12);
        }
        else
        {
                $search = '';
            $alertants = Alertant::where('tipus_alertant_id','like',1)->orderby('nom')->paginate(12);
        }
        
        $data['alertants'] = $alertants;
        $data['search'] = $search;
        return view('alertantCentreSanitari', $data);
        
    }    
    
    public function indexAlertantsVIP(Request $request)
    {
        if($request->has('search'))
        {
            $search = $request->input('search');
            $alertants = Alertant::where('tipus_alertant_id','like',4)->where('nom', 'like', '%'.$search.'%')->orderby('nom')->paginate(12);
        }
        else
        {
            $search = '';
            $alertants = Alertant::where('tipus_alertant_id','like',4)->orderby('nom')->paginate(12);
        }

        $tipusAlertants = TipuAlertant::all();
        $data['tipusAlertants'] = $tipusAlertants;
        $data['alertants'] = $alertants;
        $data['search'] = $search;
        return view('alertantVIP', $data);
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function show(Alertant $alertant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function edit(Alertant $alertant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alertant $alertant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alertant  $alertant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alertant $alertant)
    {
        //
    }
}
