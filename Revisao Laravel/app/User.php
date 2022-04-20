<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function bicycle()
    {
        return $this->hasMany(Bicycle::class);
    }
}
