<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $table='materials';
    protected $fillable=['id','code','description','status'];
}
