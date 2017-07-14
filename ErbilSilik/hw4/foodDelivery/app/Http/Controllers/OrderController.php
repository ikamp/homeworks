<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function list($userId)
    {
        $orders = Order::with('orderItem')->where('userid', $userId)->get();
        return response()->json($orders);
    }

    public function create(Request $request, $userId)
    {
        $order = new Order();
        $orderitem = new OrderItem();
        $order->userid = $userId;
        $order->date = date('Y-m-d H:i:s');
        $order->save();
        for ($i = 0; $i < count($request->Items); $i++) { 
            $orderitem->orderid = $order->id;
            $orderitem->foodid = $request->Items[$i]['foodid'];
            $orderitem->quantity = $request->Items[$i]['quantity'];
            $orderitem->save();
        }
        return Order::all();
    }
}
