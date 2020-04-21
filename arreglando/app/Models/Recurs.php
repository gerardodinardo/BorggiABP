<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurs extends Model
{
    protected $table = 'recursos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    public $timestamps = false;

    //tabla con 2 FK hacia tipos_recurs y _usuario falta por hacer, meter caña

    public function recurs1ID(){

    }

    public function usuario(){

    }
}
