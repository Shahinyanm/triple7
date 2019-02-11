<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public $withJson = true;
    protected $fillable = ['title','forum_id','user_id'];

    protected $casts = [
        'title' => 'array',
    ];
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



    public function getTitleAttribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }

}
