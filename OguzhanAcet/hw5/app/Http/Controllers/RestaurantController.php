<?php

namespace App\Http\Controllers;

use App\Model\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::all();
    }

    public function show($id)
    {
        return Restaurant::with('foods')->find($id);
    }

}
