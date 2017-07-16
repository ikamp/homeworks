<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_item';

    public function order()
    {
        return $this->belongsTo('App\Order', 'orderId');
    }

    public function food()
    {
        return $this->hasOne('App\Food', 'foodId');
    }
}
