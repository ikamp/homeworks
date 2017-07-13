<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    public function list($restaurantId)
    {
        $foods = Food::where('restaurantid', '=', $restaurantId)->get();
        return response()->json($foods);
    }
}
