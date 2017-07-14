<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class OrderItem extends Model
{
    protected $table='orderitem';
    public $timestamp=false;

    public function order()
    {
        return self::hasOne('App\Module\Order','orderId');
    }
    public function food()
    {
        return self::hasOne('App\Model\Food','foodId');
    }

}