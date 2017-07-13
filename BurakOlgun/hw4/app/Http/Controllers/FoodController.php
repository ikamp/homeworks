<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;
use Mockery\Exception;

class FoodController extends Controller
{
    public function createNewFood(Request $request)
    {
        try {
            $name = $request -> name;
            $price = $request -> price;
            $description = $request -> description;
            $restaurantId = $request -> restaurantId;
            if ($restaurantId == null) throw new Exception("Restaurant id cant be null");
            if(!Restaurant::where('id', '=', 1)->get() ) throw new Exception('Restaurant not found');
            $food = new Food();
            $food -> name = $name;
            $food -> price = $price;
            $food -> description = $description;
            $food -> restaurant_id = $restaurantId;
            $food -> save();
            } catch (Exception $exception) {
                return 'Hata Olustu => ' . $exception->getMessage();
        }
        return response() -> json('Success');
    }
}
