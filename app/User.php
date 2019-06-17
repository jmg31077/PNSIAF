<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table='subarticles';
    protected $fillable=['id','email','encrypted_password','reset_password_token','reset_password_sent_at','remember_created_at','sign_in_count','current_sign_in_at','last_sign_in_at','current_sign_in_ip',
'last_sign_in_ip','username','code','name','title','ci','phone','mobile','status','departament_id','role','password_change','assets_count'];
}
