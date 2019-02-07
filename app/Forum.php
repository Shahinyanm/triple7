<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['title','text'];
    protected $casts = [
        'title' => 'array',
        'text' => 'array',
    ];

    public function getTitleAttribute($value)
    {
        $lang = app()->getLocale();
        return json_decode($value)->$lang;
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
