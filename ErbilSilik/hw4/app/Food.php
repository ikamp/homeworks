<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "food";
    
    /**
     * An food is owned by an restaurant
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo; 
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
