<?php

namespace App\Http\Controllers;

use App\Model\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function listRestaurants()
    {
        $restaurants = Restaurant::all()->get();
        return json_encode('restaurants',['restaurants' => $restaurants]);
    }
}
