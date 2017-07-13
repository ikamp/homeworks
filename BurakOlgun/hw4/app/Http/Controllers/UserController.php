<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class UserController extends Controller
{
    public function addNewUser(Request $request)
    {
        try
        {
            $user = new User();
            $user -> userName = $request -> userName;
            $user -> email = $request -> email;
            $user -> password = $request -> password;
            $user -> adress = $request -> adress;
            $user ->save();

        }catch (Exception $exception)
        {
            return response() -> json('Error '. $exception->getMessage());
        }
        return response() -> json('Success');
    }
}
