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
		$food->id = '56';
		$food->name = 'Imambayildi';
		$food->price = '57';
		$food->restaurantId = '98';
		$food->description = 'Ilerden sola don, Sishane metronun hemen orda';

		$food->save();
	}

	public function listFood()
	{
		return Food::all()
	}
}