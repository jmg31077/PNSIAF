<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cierre_Gestion extends Model
{
    //
    protected $table='cierre_gestiones';
    protected $fillable=['id','actualizacion_gestion','depreciacion_gestion','indice_ufv','asset_id','gestion_id','fecha'];
}
