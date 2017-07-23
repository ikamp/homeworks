<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    public function order()
    {
        return self::hasOne('App\Model\Order', 'orderId');
    }

    public function food()
    {
        return self::hasOne('App\Model\Food', 'foodId');
    }
}
?>
