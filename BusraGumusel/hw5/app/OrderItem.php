<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderitem';
    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo('App\Order', 'id', 'order_id');
    }

    public function food()
    {
        return $this->hasOne('App\Food','id', 'food_id');
    }
}
