<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = true;

    public function orderItems()
    {
        return self::hasMany('App\Model\OrderItem', 'orderId');
    }

      public function user()
    {
        return self::hasOne('App\Model\User', 'id');
    }
}
?>

