<?php

namespace App\Http\Controllers;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class OrderController
{
    public function addOrder(Request $request)
    {
        $order = new Order();
        $order->userId = $request->userId;
        $order->id =5;
       	$order->save();
    }
     
     public function orderItems($orderId)
    {
    	return OrderItem::find($orderId)->get()
    }
 
    public function orderUser($orderId)
    {
        return Order::find($orderId)->user()->get();
    }
} 

	public function listOrder()
	{
		return Order::all()
	}
