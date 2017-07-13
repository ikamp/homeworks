<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{
	public function addUser()
	{
		$user = new User();
		$user->username = 'Ramin';
		$user->email = 'ramin@gmail.com';
		$user->password = '1784934';
		$user->address = 'Azadliq Avenue, Baku';

		return response()->json($user->save());
	}

	public function listUser()
	{
		return User::all();		
	}
}