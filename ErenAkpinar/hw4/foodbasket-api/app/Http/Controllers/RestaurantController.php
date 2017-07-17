<?php

namespace App\Http\Controllers;

use App\Model\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::getListRestaurants();
    }

    public function show($id)
    {
        return Restaurant::getRestaurant($id);
    }
}
