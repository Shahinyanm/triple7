<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrickActivate extends Model
{
    protected $fillable = ['trick_id', 'user_id','activate'];


    public function tricks (){
        return $this->belongsTo('App\Trick');
    }


    public function users (){
        return $this->belongsTo('App\User');
    }
}
