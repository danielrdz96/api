<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function contact(){
        return $this->hasMany('App\Contact');
    }
    public function status(){
        return $this->belongsTo('App\ActivityStatus');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
