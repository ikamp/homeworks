<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class UserController extends Controller
{
    public function addNewUser(Request $request)
    {
        $user = User::addNewuser($request->userName, $request->email, $request->password, $request->adress);
        return response()->json($user);
    }
}
