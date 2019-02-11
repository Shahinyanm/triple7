<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;
use App\Traits\GeoCode;

class Forum extends Model
{
    use GeoCode;

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
            $lang = $this->localeCode();
            $response = json_decode($value)->$lang;
        }

        return $response;
    }

    public function getTextAttribute($value)
    {
        $lang = $this->localeCode();
        return json_decode($value)->$lang;
    }

    public function topics(){
        return $this->hasMany('App\Topic');
    }

}
