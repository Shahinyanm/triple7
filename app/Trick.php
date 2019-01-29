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
}
