<?php

namespace App\Model;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($userId)
    {
        $order = new Order();
        $order->userId = $userId;
        $order->save();
        return Order::all();
    }
}
?>
