<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   protected $table = 'user-orders';

   public function orders()
    {
        return self::hasMany('App\Model\Order', 'userId');
    }
}
?>
