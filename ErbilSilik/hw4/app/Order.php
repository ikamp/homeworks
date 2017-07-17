<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    /**
     * An order can have many order item
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany; 
     */
    public function orderItem()
    {
        return $this->hasMany('App\OrderItem', 'orderid', 'id' );
    }
}
