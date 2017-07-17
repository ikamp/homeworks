<?php

namespace App\Http\Controllers;

use App\Model\OrderItem;
use Illuminate\Http\Request;
use App\Model\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = Order::newOrder(1); //userId not dynamic

        foreach ($request->items as $item) {
            OrderItem::newOrderItem(
                $order['id'],
                $item['foodId'],
                $item['quantity'],
                $item['price']);
        }

        return $order['id'];
    }

    public function show($id)
    {
        //
    }
}
