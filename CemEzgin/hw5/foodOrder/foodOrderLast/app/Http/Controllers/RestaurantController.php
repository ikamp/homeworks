<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurantList = Restaurant::all();
        return response()->json($restaurantList);
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return response()->json($restaurant);
    }
}
