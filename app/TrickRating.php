<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrickRating extends Model
{
    protected $fillable = ['user_id','trick_id', 'rating'];

    public function trick()
    {
        return $this->belongsTo('App\Trick');
    }

    public function scopeRatingYes($query){
        return $query->where('rating', 1);
    }

    public function scopeRatingNo($query){
        return $query->where('rating', 0);
    }
}
