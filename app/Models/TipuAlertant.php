<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipuAlertant extends Model
{
    protected $table = 'tipus_alertant';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    
    public $timestamps = false;

    public function alertants()
    {
        return $this->hasMany('App\Model\Alertant', 'id');
    }

    public function incidencia()
    {
        return $this->hasMany('App\Model\Incidencia', 'id');
    }
}
