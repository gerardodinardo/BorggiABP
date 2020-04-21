<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencies';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'int';

    public $timestamps = false;

    //relacion con demasiadas FK, me quiero morir, en concreto 5
}
