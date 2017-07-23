<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    public static function newOrder(Order $order)
    {

        $order->save();
    }

    public static function getListOrderItem($id)
    {
        return self::with('orderitem')->find($id);
    }

    public static function getOrderUser($id)
    {
        return self::find($id)->user()->get();
    }

    public function orderItems()
    {
        return self::hasMany('App\Model\OrderItem', 'orderId');
    }

    public function user()
    {
        return self::belongsTo('App\Model\User', 'id');
    }
}
