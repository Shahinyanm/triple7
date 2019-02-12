<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected  $fillable = ['user_id','trick_id','wins','winning_id'];

    public function trick (){
        return $this->belongsTo(Trick::class);
    }


    public function user (){
        return $this->belongsTo('App\User');
    }

    public function winning (){
        return $this->belongsTo('App\Winning');
    }
}
