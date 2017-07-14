<?php

namespace App\Http\Controllers;
use App\Model\User;

class UserController extends Controller
{
    public function listAllUser()
    {
        return User::all();
    }
    public function getSpecificUser($id)
    {
        return User::find($id);

    }
    public function getUserOrder($id)
    {

        return User::find($id)->orders()->get();
    }


}