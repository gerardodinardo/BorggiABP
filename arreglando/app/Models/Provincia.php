<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincies';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    //tabla sin FK lol

    public function comarques(){

        return $this->hasMany('App\Models\Comarca','provincies_id');

    }
}
