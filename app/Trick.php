<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trick extends Model
{
    protected $fillable = [
        'description1','description2','description3','description4','amount','link','activated'
        ];

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
        }
    }

    public function activate (){
        return $this->hasMany('App\TrickActivate');
    }

    public function report (){
        return $this->hasMany('App\Report');
    }
}
