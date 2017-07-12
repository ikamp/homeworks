<?php

class Restaurant {
    /** @commentId Integer */
    private $commentId;
    /** @name string */
    private $name;
    /** @district string */
    private $district;
    /** @averageRate float */
    private $averageRate;
    /** @minPrice float */
    private $minPrice;

    private function displayRestaurants()
    {
        /** @return string */
        return $returnValue;
    }

    private function getMenu()
    {
        $this->$menuId = new Menu();
        /** @return string */
        return $this->$menuId;
    }

    private function getComment()
    {
        return $this->$commentId = new Comments();
    }
}

?>
