<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winning extends Model
{
    protected $fillable = ['image','user_id','trick_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function trick(){
        return $this->belongsTo('App\Trick');
    }

    public function report(){
        return $this->hasMany('App\Report');
    }
}
