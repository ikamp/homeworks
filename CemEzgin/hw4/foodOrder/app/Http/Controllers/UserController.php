<?php

namespace App\Http\Controllers;
namespace  App\Model\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {

    }
    public function listUserOrders($userId)
    {
        $userOrders = User::where('id','=',$userId)->get();
        return json_encode('user-orders',['user-orders' => $userOrders]);
    }
}
