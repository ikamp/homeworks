<?php
class Restaurant {
    private $id;
    private $name;
    private $city;
    private $district;
    private $rate;

    public function getRestaurantId()
    {
        return $this->id;
    }

    public function setRestaurantId($id)
    {
        $this->id = $id;
    }

    public function getRestaurantName()
    {
        return $this->name;
    }

    public function setRestaurantName($name)
    {
        $this->name = $name;
    }

    public function getRestaurantCity()
    {
        return $this->city;
    }

    public function setRestaurantCity($city)
    {
        $this->city = $city;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}
?>