<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $fillable =['user_id','trick_id','amount','image'];

    public function tricks (){
        return $this->belongsTo('App\Trick');
    }


    public function users (){
        return $this->belongsTo('App\User');
    }
}
