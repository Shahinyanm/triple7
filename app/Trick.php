<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GeoCode;

class Trick extends Model
{
    use GeoCode;
    protected $fillable = [
        'description1','description2','description3','description4','amount','link','activated'
        ];

    protected $casts = [
        'description1' => 'array',
        'description2' => 'array',
        'description3' => 'array',
        'description4' => 'array',
    ];

    public $withJson = true;

    public function rating()
    {
        return $this->hasMany('App\TrickRating');
    }

    public function images()
    {
        return $this->hasMany('App\TrickImage');
    }

    public function setLinkAttribute($value){
        if (!preg_match("~^(?:f|ht)tps?://~i", $value)) {
            $this->attributes['link'] = "http://" . $value;
        }else{
            $this->attributes['link'] =$value;
        }

    }


    public function activate (){
        return $this->hasMany('App\TrickActivate');
    }

    public function report (){
        return $this->hasMany('App\Report');
    }

    public function refund (){
        return $this->hasMany('App\Refund');
    }




    public function getDescription1Attribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }
        return $response;
    }

    public function getDescription2Attribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }

    public function getDescription3Attribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }

    public function getDescription4Attribute($value)
    {
        $response = $value;

        if($this->withJson) {
            $lang = app()->getLocale();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }


}
