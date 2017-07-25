<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderHistory = Order::with(["items", "items.food"])->where("user_id", Auth::id())->get();
        return response()->json($orderHistory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $basket = $request->basket;
        var_dump($basket);
        die;
        
        $order = new Order();
        $order->user_id = Auth::id();
        $order->restaurant_id = $basket->restaurantId;
        $order->save();

        foreach ($basket->foods as $item) {
            $orderItem = new OrderItem();
            $orderItem->food_id = $item["id"];
            $orderItem->price = $item["price"];
            $orderItem->quantity = $item["quantity"];
            $orderItem->order_id = $order->id;
            $orderItem->save();
        }

        return response()->json($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleOrder = Order::with(["items", "items.food", "restaurant"])->where("user_id", Auth::id())->find($id);
        return response()->json($singleOrder);
    }

}
