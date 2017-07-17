<?php

namespace App\Http\Controllers;


use App\Model\Restaurant;
use Illuminate\Http\Response;

class RestaurantController extends Controller
{

    public function index()
    {
        $restaurant = Restaurant::all();
        return response()->json($restaurant->toArray());
    }

    public function show($id)
    {
        return Restaurant::restaurantFoods($id);
    }
}
