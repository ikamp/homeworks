<?php
namespace App\Modules\Restaurant;
use App\Http\Controllers\BaseController;
use App\Modules\Restaurant\Manager\RestaurantManager;

class Controller extends BaseController {

    public function restaurantList($name)
    {
        dd(RestaurantManager::getByName($name));
    }
}
