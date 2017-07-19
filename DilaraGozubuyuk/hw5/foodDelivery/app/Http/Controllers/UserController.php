<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertUser()
    {
        $user = new User();
        $user->username = "Dilaragz";
        $user->email= "dhj@hotmail.com";
        $user->password= "123456";
        $user->adress="beyoglu";
        return response()->json($user->save());
    }
    public function listUser()
    {
        return User::all();
    }

}
