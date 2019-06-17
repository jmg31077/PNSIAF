<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry_Subarticle extends Model
{
    //
    protected $table='entry_subarticles';
    protected $fillable=['id','amount','unit_cost','total_cost','invoice','date','subarticle_id','stock','note_entry_id','invalidate'];
}
