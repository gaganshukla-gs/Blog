<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{   
    protected  $guarded = [];

    public function file(){
        return $this->belongsTo('App\Models\File','file_id');
    }
}
