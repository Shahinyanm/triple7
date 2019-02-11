<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GeoCode;

class Post extends Model
{
    use GeoCode;
    public $withJson = true;
    protected  $fillable = ['text', 'user_id','topic_id','code'];

    protected $casts = [
        'text' => 'array',
    ];



    public function topic(){
        return $this->belongsTo('App\Topic');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }


    public function getTextAttribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;

        }

        return $response;
    }

  }
