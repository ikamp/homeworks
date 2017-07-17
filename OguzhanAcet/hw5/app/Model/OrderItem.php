<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  protected $table = 'orderitem';
  public $timestamp = false;
  public static function newOrderItem()
  {
  }
  public function order()
  {
      return self::hasOne('App\Model\Order', 'orderId');
  }
  public function food()
  {
      return self::hasOne('App\Model\Food', 'foodId');
  }
}
