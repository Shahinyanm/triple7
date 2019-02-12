<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{


    public function tricks()
    {
        return $this->belongstoMany('App\Trick','tricks_languages');
    }
}
