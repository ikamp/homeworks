<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class RestaurantController extends Controller
{
	public function addRestaurant()
	{
		$restaurant = new Restaurant();
		$restaurant->id = '1';
		$restaurant->name = 'Simit Sarayi';
		$restaurant->district = 'Beyoglu, Istanbul';
		$restaurant->phoneNumber = '0212784657';
		$restaurant->save();
    }

    public function listRestaurant()
    {

		return Restaurant::all();
    }
}