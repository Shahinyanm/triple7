<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['title','text'];
    public $withJson = true;

    protected $casts = [
        'title' => 'array',
        'text' => 'array',
    ];

    public function getTitleAttribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }

    public function getTextAttribute($value)
    {
        $lang = app()->getLocale();
        return json_decode($value)->$lang;
    }

    public function topics(){
        return $this->hasMany('App\Topic');
    }

}
