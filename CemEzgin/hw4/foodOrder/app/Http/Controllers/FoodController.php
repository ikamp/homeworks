<?php

namespace App\Http\Controllers;
namespace App\Model;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function listFood($restaurantId)
    {
        $foods = Food::where('restaurantId','=',$restaurantId)->get();
        return json_encode('foods',['foods' => $foods]);
    }
}

