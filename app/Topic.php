<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title','forum_id','user_id'];

    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
