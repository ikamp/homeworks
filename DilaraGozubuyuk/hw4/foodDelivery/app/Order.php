<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;
    protected $table = 'order';

    public function orderItems()
    {
        return $this::hasMany('App\OrderItem', 'orderId');
    }

    public function user()
    {
        return $this::hasOne('App\User', 'id');
    }
}
