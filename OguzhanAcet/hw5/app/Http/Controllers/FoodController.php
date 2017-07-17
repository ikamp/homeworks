<?php

namespace App\Http\Controllers;

use App\Model\Food;

class FoodController extends Controller
{
    public function index()
    {
      return Food::all();
    }
}
