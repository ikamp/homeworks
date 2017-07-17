<?php

namespace App\Model;

class OrderItem extends BaseModel
{
    protected $table = 'orderitem';
    public $timestamp = true;

    public static function newOrderItem($orderId, $foodId, $quantity, $price)
    {
        $orderItem = new OrderItem();

        $orderItem->orderId = $orderId;
        $orderItem->foodId = $foodId;
        $orderItem->quantity = $quantity;
        $orderItem->price = $price;
        $orderItem->save();

        return $orderItem;
    }

    public function order()
    {
        return self::belongsTo('App\Model\Order', 'orderId');
    }

    public function food()
    {
        return self::belongsTo('App\Model\Food', 'foodId');
    }
}
