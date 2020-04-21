<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencies';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    //relacion con demasiadas FK, me quiero morir, en concreto 5

    public function afectats(){

        return $this->belongstoMany('App\Models\Afectat','incidencies_has_afectats','incidencies_id','afectats_id');

    }

    public function minicipis(){

    }

    
}
