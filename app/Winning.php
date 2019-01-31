<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winning extends Model
{
    protected $fillable = ['image'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
