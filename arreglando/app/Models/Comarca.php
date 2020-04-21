<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comarca extends Model
{
    protected $table = 'comarques';
    protected $priamryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    public $timestamps = false;

    //tabla con una FK hacia provincies belongs to many creo falta completar

    public function provincies()
    {
        return $this->belongstoMany;//falta
    }
}
