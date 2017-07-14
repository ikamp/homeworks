<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table='user';
    public $timestamps=false;

    public function orders()
    {

        return User::hasMany('App\Model\Order','userid');
    }

}
