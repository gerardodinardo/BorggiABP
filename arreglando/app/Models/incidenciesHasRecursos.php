<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class incidenciesHasRecursos extends Model
{
    protected $table = 'incidencies_has_recursos';
    //protected $primaryKey = ['incidencies_id', 'recursos_id'];
    public $incrementing = false;
    protected $keyType = 'int';

    public $timestamps = false;

}
