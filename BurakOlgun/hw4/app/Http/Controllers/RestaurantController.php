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
        } catch (Exception $exception)
        {
            return response() -> json('Error => ' .$exception -> getMessage());
        }
        return response() -> json($restaurants);

    }
    public function createNewRestaurant(Request $request)
    {
        try
        {
            if ($request->name == '') throw new Exception("Restaurant name cant be null");
            $restaurant = new Restaurant();
            $restaurant->name = $request->name;
            $restaurant->district = $request->district;
            $restaurant->phone = $request->phone;
            $restaurant->save();
        } catch (Exception $exception) {
            return response()->json("Error =>" . $exception->getMessage());
        }
        return response()->json("Restaurant Created");
    }

    public function getRestaurantFood(Request $request)
    {
        try
        {
            $restaurantId = $request -> id;
            if($restaurantId == '' | $restaurantId == null ) throw new Exception('Restorant id can not be null');
            $foods = Food::where('restaurant_id', '=', $restaurantId)->get();
        } catch (Exception $exception)
        {
            return response() -> json('Error => '. $exception->getMessage());
        }
        return response() -> json($foods);
    }


}
