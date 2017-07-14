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

    public function create(Request $request)
    {
        $order = new Order();
        $orderitem = new OrderItem();
        $order->userid = 4;
        $order->save();
        foreach ($request->items as $item) {
            $orderitem->orderid = $order->id;
            $orderitem->foodid = $item['foodid'];
            $orderitem->price = $item['price'];
            $orderitem->quantity = $item['quantity'];
            $orderitem->save();
        }
        return "Sipariş başarıyla oluşturuldu";
    }
}
