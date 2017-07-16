<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    public $timestamps = false;

    public static function getAllFoods()
    {
        return Food::all(); // returned all foods
    }

    public static function getRestaurantsFoods($restaurantid)
    {
        return Food::where('restaurantid', '=', $restaurantid)->get();
    }

    public static function createNewFood($name, $price, $description, $restaurantId)
    {
        $food = new Food();
        $food->name = $name;
        $food->price = $price;
        $food->description = $description;
        $food->restaurant_id = $restaurantId;
        $food->save();
    }

}
