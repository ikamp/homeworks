<?php

namespace App\Model;

class Order extends BaseModel
{
    protected $table = 'order';
    public $timestamps = false;

    public static function newOrder($userId)
    {
        $order = new Order();

        $order->userId = $userId;
        $order->date = date('Y-m-d H:i:s');
        $order->save();

        return $order;
    }

    public static function getListOrderItems($id)
    {
        return self::with('orderItems')->find($id);
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
