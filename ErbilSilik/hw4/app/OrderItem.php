<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = "orderitem";

    /**
     * An orderItem is owned by an order
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo; 
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * An orderItem is owned by an food
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasOne; 
     */
    public function food()
    {
        return $this->hasOne('App\Food');
    }
}
