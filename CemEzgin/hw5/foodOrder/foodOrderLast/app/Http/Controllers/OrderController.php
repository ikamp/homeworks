<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id)
    {
        $userOrder = Order::find($id);
        return response()->json($userOrder);
    }

}
