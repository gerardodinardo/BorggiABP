<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afectat extends Model
{
    protected $table = 'afectats';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public $timestamps = false;

    //tabla con sola una FK a municipis, falta acabar...
    public function municipis()
    {
        return $this->belongstoMany('App\Models\Municipi', 'falta rellenar los campos de municipi');
    }
}
