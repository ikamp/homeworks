<?php

namespace App\Model;

class Restaurant extends BaseModel
{
    protected $table = 'restaurant';
    public $timestamps = false;

    public static function getListRestaurants()
    {
        return self::all();
    }

    public static function getRestaurant($id)
    {
        return self::with('foods')->find($id);
    }

    public function foods()
    {
        return self::hasMany('App\Model\Food', 'restaurantId');
    }
}
