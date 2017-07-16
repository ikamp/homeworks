<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $timestamps = false;

    public static function getMyOrders($userid)
    {
        OrderItem::where('id','=',$userid)->get();
    }

}
