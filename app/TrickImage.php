<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrickImage extends Model
{

    protected $fillable =['src','trick_id'];

    public function trick()
    {
        return $this->belongsTo('App\Trick');
    }
}
