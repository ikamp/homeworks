<?php
/**
 * Created by PhpStorm.
 * User: bolgun
 * Date: 13.07.2017
 * Time: 13:55
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function getIndexAction()
    {
        return response("burasi index");
    }

}