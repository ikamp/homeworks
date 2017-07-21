<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertUser()
    {
        $user = new User();
        $user->username = "Dilaragz";
        $user->email = "dhj@hotmail.com";
        $user->password = "123456";
        $user->adress = "beyoglu";
        return response()->json($user->save());
    }


    public function index()
    {
        $orderHistory = Order::with("items")->where("userId", 1)->get();
        return response()->json($orderHistory);
    }

}
