<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    public $timestamps = false;

    public function restaurant()
    {
        return $this::belongsTo('App\Restaurant', 'id', 'restaurantId');
    }

}
