<?php

  namespace App\Http\Controllers;
  use App\User;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Log;
  class UserController extends Controller
  {

    public function userInsert()
    {
      $user = new User();
      $user->email = "oguz@acet.me";
      $user->username= "oguz";
      $user->adress= "istanbul";
      $user->password= "123";
      return response()->json($user->save());
    }
    public function listUser()
      {
        return User::all();
      }
  }
