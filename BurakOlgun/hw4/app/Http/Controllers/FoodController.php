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
                $name = $request->name;
                $price = $request->price;
                $description = $request->description;
                $restaurantId = $request->restaurantId;
                if ($restaurantId == null)
                    throw new Exception("Restaurant id cant be null");
                if (!Restaurant::find($restaurantId)) //DI model
                    throw new Exception('Restaurant not found');
                Food::createNewFood($name, $price, $description, $restaurantId);
                return response()->json('Success');
            } catch (Exception $exception) {
                return 'Hata Olustu => ' . $exception->getMessage();
            }
    }

    public function getAllFoods()
    {
        return response()->json(Food::getAllFoods());
    }
}
