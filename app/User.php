<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','title', 'email', 'password','password_confirmation', 'is_admin ',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function winnings(){
        return $this->hasMany('App\Winning');
    }

    public function activate (){
        return $this->hasMany('App\TrickActivate');
    }

    public function report (){
        return $this->hasMany('App\Report');
    }
}
