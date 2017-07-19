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
        $data = $request->json()->all();
        var_dump($data);
        $count = count($data["item"]);
        var_dump($count);
        var_dump($data["item"][0]["foodId"]);

        for ($i = 0; $i < count($data["item"]); $i++) {
            var_dump("naber");
            $orderItem->foodId = $data["item"][$i]["foodId"];
            $orderItem->orderId = $order->id;
            $orderItem->quantity = $data["item"][$i]["quantity"];
            $orderItem->price = $data["item"][$i]["price"];
            var_dump($orderItem->save());
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
        //return OrderItem::where("orderId", 1)->get();
        return OrderItem::all();
    }

}

