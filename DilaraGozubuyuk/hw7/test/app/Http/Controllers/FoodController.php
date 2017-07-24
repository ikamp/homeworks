<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Food;
use Illuminate\Http\Request;
use DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::all();
        return response()->json($food);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Food::where('id', $id)->get();
        return response()->json($restaurant);
    }
}
