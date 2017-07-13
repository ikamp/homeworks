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
        $orderitem = new OrderItem();
        var_dump(count($request[4]));
        $count=0;
        while(count($request[$count])!=0)
        {
            var_dump($request[$count]["foodid"]);
            var_dump($request[$count]["quantity"]);
            var_dump($request[$count]["price"]);
            $orderitem->foodId = $request[$count]["foodid"];
            $orderitem->orderId = $order->id;
            $orderitem->quantity = $request[$count]["quantity"];
            $orderitem->price = $request[$count]["price"];
            $count++;
            $orderitem->save();
        }
    }
    public function addOrder()
    {
        $order = new Order();
        $order->userId = 1;
        $order->save();
        $orderitem = new OrderItem();
        $orderitem->foodId = 2;
        $orderitem->orderId = $order->id;
        $orderitem->quantity = 2;
        $orderitem->price = 10;
        $orderitem->save();
    }
    public function listOrders()
    {
        $Orders=OrderItem::table('orderitem')->select('food.name', 'food.price', 'order.quantity')
            ->join('food', 'food.id', '=', 'orderitem.foodId')->get();
        return view ('orders',['orders'=>$Orders]);
    }

}

