<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $table='assets';
    protected $fillable=['id','code','description','auxliary_id','user_id','asset_id','accound_id','barcode','state',
    'observation','proceso','observaciones','precio','detalle','medidas','material','color','marca','modelo','serie','code_old','ingreso_id','ubicacion_id','baja_id'];
}
