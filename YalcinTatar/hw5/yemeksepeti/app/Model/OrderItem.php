<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderitem';
    public $timestamp = true;

    public static function newOrderItem()
    {
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
