<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected   $table = 'role_user';
    protected $fillable = ['user_id','role_id'];

    function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    function role(){
        return $this->belongsTo('App\Models\Role','role_id','id');
    }
}
