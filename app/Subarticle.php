<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarticle extends Model
{
    //
    protected $table='subarticles';
    protected $fillable=['id','code','description','unit','status','articles_id','amount','mininum','barcode','code_old','incremento','material_id'];
}
