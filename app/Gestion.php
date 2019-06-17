<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    //
    protected $table='gestiones';
    protected $fillable=['id','anio','cerrado','fecha_cierre','user_id'];
}
