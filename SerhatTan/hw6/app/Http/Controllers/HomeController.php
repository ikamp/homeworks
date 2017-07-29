<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect("/");
    }

    public function logout()
    {
        return Auth::logout();
    }

    public function user()
    {
        if (Auth::check()) {
            return response()->json(Auth::user());
        } else {
            return response()->json(false);
        }
    }
}
