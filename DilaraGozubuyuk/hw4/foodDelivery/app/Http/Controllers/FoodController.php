<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function insertFood()
    {
        $food = new Food();
        $food->name = "waffle";
        $food->price= 30;
        $food->restaurantId= 1;
        $food->description="waffle";
        return response()->json($food->save());
    }
    public function listFoods()
    {
        return Food::all();
    }
    public function listFood()
    {
        return Food::where("restaurantId",1)->get();
    }
}
