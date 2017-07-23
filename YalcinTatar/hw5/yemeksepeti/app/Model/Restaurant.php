<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurant';
    public $timestamps = false;

    public static function getRestaurant($id)
    {
        return self::find($id);
    }

    public static function restaurantFoods($id)
    {
        return self::with('foods')->find($id);
    }

    public function foods()
    {
        return self::hasMany('App\Model\Food', 'restaurantId');
    }
}
