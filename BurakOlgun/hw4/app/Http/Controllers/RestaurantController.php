<?php

namespace App\Http\Controllers;

use App\Food;
use App\Restaurant;
use Illuminate\Http\Request;
use Mockery\Exception;

class RestaurantController extends Controller
{
    public function getRestaurantsAll()
    {
        try
        {
            $restaurants = Restaurant::all();
            return response()->json($restaurants);
        } catch (Exception $exception)
        {
            return response()->json('Error => ' .$exception->getMessage());
        }

    }
    public function createNewRestaurant(Request $request)
    {
        try
        {

            if ($request->name == '')
                throw new Exception("Restaurant name cant be null");
            $restaurant = new Restaurant();
            $restaurant->name = $request->name;
            $restaurant->district = $request->district;
            $restaurant->phone = $request->phone;
            $restaurant->save();
            return response()->json("Restaurant Created");

        } catch (Exception $exception) {
            return response()->json("Error =>" . $exception->getMessage());
        }
    }

    public function getRestaurantFood(Request $request)
    {
        try
        {
            $restaurantId = $request->id;
            if($restaurantId == '' | $restaurantId == null )
                throw new Exception('Restorant id can not be null');
            return response()->json(Food::getRestaurantsFoods($restaurantId));
        } catch (Exception $exception)
        {
            return response()->json('Error => '. $exception->getMessage());
        }
    }
}
