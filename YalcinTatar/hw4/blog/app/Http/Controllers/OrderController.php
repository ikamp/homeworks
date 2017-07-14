<?php

namespace App\Http\Controllers;
use App\Model\Order;
use Illuminate\Http\Request;

class  OrderController extends Controller
{

    public function getUsersOrder($id)
    {
        return Order::find($id)->orderItems()->get();
    }
    public function createOrder(Request $request)
    {
        $order=new Order();
        $order->userid=$request->userId;
        return Order::newOrder($order);

    }
    public function orderItem($id)
    {
        return Order::find($id)->orderItems()->get();
    }
    public function orderUser($id)
    {
        return Order::find($id)->user()->get();
    }
}
