<?php

namespace App\Http\Controllers;

use App\Food;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Mockery\Exception;
use App\Providers\ExceptionMessages;

class OrderController extends Controller
{
    public function getOrdersAll()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function newOrder(Request $request)
    {
        try
        {
            $order = new Order();
            $orderItem = new OrderItem();
            $order->date = date("Y-m-d H:i:s");
            $order->userId = $request->userId;
            $order ->save();
            $orderItem->quantity = $request->quantity;
            $orderItem->price = $request->quantity  * $orderFood[0]->price;
            $orderItem->orderId = 3; //problem ID
            $orderItem->foodId = 1; // problem ID
            $orderItem->save();
            return response()->json('success');
        }catch (Exception $exception)
        {
            return response()->json('Error => '.$exception->getMessage());
        }
    }

    public function getMyOrders(Request $request)
    {
        $userId = $request->userId;
        return response()->json(Order::getMyOrders($userId));
    }
}

