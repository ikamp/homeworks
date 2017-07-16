<?php

namespace App\Http\Controllers;
use App\Food;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function insertOrder(Request $request)
    {
        $order = new Order();
        $order->userId = 1;
        $order->save();
        $orderItem = new OrderItem();
        var_dump(count($request[4]));

        foreach ($request as $item)
        {
            var_dump("naber");
            $orderItem->foodId = $item["foodid"];
            $orderItem->orderId = $order->id;
            $orderItem->quantity = $item["quantity"];
            $orderItem->price = $item["price"];
            $orderItem->save();
        }
    }
    public function addOrder()
    {
        $order = new Order();
        $order->userId = 1;
        $order->save();
        $orderItem = new OrderItem();
        $orderItem->foodId = 2;
        $orderItem->orderId = $order->id;
        $orderItem->quantity = 2;
        $orderItem->price = 10;
        $orderItem->save();
    }
    public function listOrders()
    {
        return OrderItem::where("orderId",1)->get();
    }

}

