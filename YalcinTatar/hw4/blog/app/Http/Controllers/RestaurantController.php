<?php

namespace App\Http\Controllers;
use App\Model\Restaurant;

class RestaurantController extends Controller
{
    public function viewRestaurants()
    {
        return Restaurant::all();
    }
    public function getRestaurant($id)
    {
        return Restaurant::find($id);
    }
    public function getRestaurantFood($id)
    {

        return Restaurant::find($id)->restaurants()->get();
    }


}