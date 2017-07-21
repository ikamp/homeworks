<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->userId = 1;
        $order->save();
        $data = $request->json()->all();
        var_dump($data["item"][0]["foodId"]);

        /*foreach ($request->item as $item)
            $orderItem = new OrderItem();
            $orderItem->foodId = $item["foodI"];
            $orderItem->quantity = $order->id;
            $orderItem->price = $item["price"];
            $orderItem->save();
            */
        for ($i = 0; $i < count($data["item"]); $i++) {
            var_dump("naber");
            $orderItem = new OrderItem();
            $orderItem->foodId = $data["item"][$i]["foodId"];
            $orderItem->orderId = $order->id;
            $orderItem->quantity = $data["item"][$i]["quantity"];
            $orderItem->price = $data["item"][$i]["price"];
            $orderItem->save();
        }

    }

    /*public function addOrder()
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
    }*/

    public function index()
    {
        //return OrderItem::where("orderId", 1)->get();
        return OrderItem::all();
    }

}

