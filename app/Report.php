<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected  $fillable = ['user_id','trick_id','wins','winning_id'];

    public function tricks (){
        return $this->belongsTo('App\Trick');
    }


    public function users (){
        return $this->belongsTo('App\User');
    }

    public function winnings (){
        return $this->belongsTo('App\Winning');
    }
}
