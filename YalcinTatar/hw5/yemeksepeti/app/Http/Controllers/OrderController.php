<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->userId = 1;
        $order->date = date('Y-m-d H:i:s');
        $order->save();
        $orderId = $order->id;
        $orderItem = new OrderItem();
        $orderItem->orderId = 2;
        $orderItem->foodId = 1;
        $orderItem->quantity = 2;
        $orderItem->price = 5;
        $orderItem->save();

        return true;
    }

    public function show($id)
    {
        //
    }
}
