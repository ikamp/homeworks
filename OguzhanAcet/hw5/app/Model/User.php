<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = 'user';
  public $timestamps = false;


  public static function getUserOrders($id)
  {
      return self::with('order')->find($id);
  }
  public function orders()
  {
      return self::hasMany('App\Model\Order', 'userId');
  }
}
