<?php
  namespace App\Http\Controllers;
  use App\Food;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Log;
  class FoodController extends Controller
  {
    public function addFood()
    {
      $food = new Food();
      $food->id = '123';
      $food->name = 'Lokumburger';
      $food->price = '90';
      $food->restaurantId = '98';
      $food->description = 'Beyoglu Meydan';
      $food->save();
    }
    public function listFood()
    {
      return Food::all()
    }
  }
