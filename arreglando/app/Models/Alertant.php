<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alertant extends Model
{
    protected $table = 'alertants';
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    //Tabla con 2 FK para municipis y tipus alertant, relacion a municipis y tipo_alertant ->> 1

    public function municipis()
    {
        return $this->belongsTo;//falta acabar
    }

    public function tipusAlertant()
    {
        return $this->belongsTo;//falta acabar
    }
}
