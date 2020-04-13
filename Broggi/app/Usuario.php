<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;
    
    public $timestamps = false;
    protected $table = 'usuaris';

    protected $fillable = [
        'nom', 'contrasenya',
    ];

    public function rol(){

        return $this->belongsTo('App\Rol','rol_id');

    }
}
