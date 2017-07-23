<?php

namespace App\Model;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $order = new Order();
        $order->userId = $request->userId;
        $order->save();
        return response()->json_encode(OrderItem::all());
    }
}
?>
