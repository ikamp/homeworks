<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $timestamps = false;
    protected $table = 'orderItem';

    public function order()
    {
        return $this::hasOne('App\Order', 'orderId');
    }

    public function food()
    {
        return $this::hasOne('App\Food', 'foodId');
    }
}
