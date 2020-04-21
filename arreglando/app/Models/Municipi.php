<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    protected $table = 'municipis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    //tabla con 1 FK, hacia comarques qq

    public function comarques()
    {
        return $this->belongsTo;//falta acabar modelo comarques qq
    }

    public function alertants(){

        return $this->hasMany('App\Models\Alertant','municipis_id');

    }
}
