<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    public $timestamps=true;

    public static function newOrder(Order $order)
    {
        $order->id=3;
        $order->save();
    }
    public function orderItems()
    {
        return self::hasMany('App\Model\OrderItem','orderId');

    }
    public function user()
    {
        return self::hasOne('App\Model\User','id');
    }
}

