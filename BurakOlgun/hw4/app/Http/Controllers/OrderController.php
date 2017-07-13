<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Mockery\Exception;

class OrderController extends Controller
{
    public function getOrdersAll()
    {
        try
        {
            $orders = Order::all();
        } catch (Exception $exception) {
            return response() -> json('Error => ' . $exception->getMessage());
        }
        return response() -> json($orders);
    }

    public function newOrder(Request $request)
    {
        try
        {
            $foodId = $request -> foodId;
            $orderFood = Food::where('id','=',$foodId)->get();
            $order = new Order();
            $orderItem = new OrderItem();
            $order -> date = date("Y-m-d H:i:s");
            $order -> userId = $request -> userId;
            $order ->save();
            $orderItem -> quantity = $request -> quantity;
            $orderItem -> price = $request -> quantity  * $orderFood[0] -> price;
            $orderItem -> orderId = 3; //problem ID
            $orderItem -> foodId = 1; // problem ID
            $orderItem -> save();
        }catch (Exception $exception)
        {
            return response() -> json('Error => '.$exception->getMessage());
        }
        return response() -> json("Success");
    }
}

