<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['title','text'];

    public function topics(){
        return $this->hasMany('App\Topic');
    }

}
