<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index($restaurantId)
    {
        $food = Food::find($restaurantId);
        return response()->json($food);
    }
}
