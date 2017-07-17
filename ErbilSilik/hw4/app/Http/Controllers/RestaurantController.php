<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    
    public function list()
    {
        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }
}
