<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    //
    protected $table='entities';
    protected $fillable=['id','code','name','acronym','header','footer'];
}
