<?php
namespace App\Modules\Restaurant\Manager;
use \App\BaseManager;
use \App\Modules\Restaurant\Model\Restaurant;
use \App\Modules\Restaurant\Entity\RestaurantEntity;

class RestaurantManager extends BaseManager
{
    /**
     * @param Restaurant $restaurant
     * @return RestaurantEntity
     */
    public static function map(Restaurant $restaurant)
    {
        $restaurantEntity = new RestaurantEntity();
        $restaurantEntity->setId($restaurant->id);
        $restaurantEntity->setName($restaurant->name);
        $restaurantEntity->setAddress($restaurant->address);
        $restaurantEntity->setDescription($restaurant->description);
        $restaurantEntity->setPhone($restaurant->phone);

        return $restaurantEntity;
    }

    /**
     * @param $name
     * @return RestaurantEntity[]
     */
    public static function getByName($name)
    {
        $restraurants = Restaurant::where('name', 'LIKE', '%' . $name . '%')->get();
        $data = [];
        foreach ($restraurants as $restraurant) {
            $data[] = self::map($restraurant);
        }

        return $data;
    }
}