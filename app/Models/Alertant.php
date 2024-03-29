<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alertant extends Model
{
    protected $table = 'alertants';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function incidencia()
    {
        return $this->belongsToMany('App\Models\Incidencia', 'id');
    }

    public function tipus()
    {
        return $this->belongsTo('App\Models\TipuAlertant', 'id');
    }

    public function municipi()
    {
        return $this->belongsTo('App\Models\Municipi', 'id');
    }

    //Tabla con 2 FK para municipis y tipus alertant, relacion a municipis y tipo_alertant ->> 1

    // public function municipis()
    // {
    //     return $this->belongsTo('App\Models\Municipi','municipis_id');
    // }

    // public function tipusAlertant()
    // {
    //     return $this->belongsTo('App\Models\TipuAlertant');
    // }

    // public function incidencies(){

    //     return $this->hasMany('App\Models\Incidencia','alertants_id');

    // }

}
