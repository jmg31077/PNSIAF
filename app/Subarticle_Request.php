<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarticle_Request extends Model
{
    //
    protected $table='subarticle_requests';
    protected $fillable=['id','subarticle_id','request_id','amount','amount_delivered','total_delivered','invalidate'];
}
