<?php

namespace App\Http\Controllers;


use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function insertRestaurant()
     {
         $restaurant = new Restaurant();
         $restaurant->name = "Burger King";
         $restaurant->district = "beyoglu";
         $restaurant->phoneNumber = "12345679";
         return response()->json($restaurant->save());
     }

    public function index()
    {
        $restaurant = Restaurant::with("foods")->get();
        return $restaurant;
    }

    public function show($id)
    {
        $restaurant = Restaurant::with("foods")->find($id);
        return $restaurant;
    }


}
