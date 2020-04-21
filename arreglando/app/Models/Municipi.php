<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    protected $table = 'municipis';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    public $timestamps = false;

    //tabla con 1 FK, hacia comarques qq

    public function comarques()
    {
        return $this->belongsTo;//falta acabar modelo comarques qq
    }
}
