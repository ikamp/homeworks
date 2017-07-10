<?php

class Restaurant{

    private $id;
    private $name;
    private $city;
    private $district;
    private $rate;

    public function getRestId()
    {
        return $this->id;
    }

    public function setRestId($id)
    {
        $this->rest_id=$id;
    }

    public function getRestName()
    {
        return $this->name;
    }

    public function setRestName($name)
    {
        $this->rest_name=$name;
    }

    public function getRestCity()
    {
        return $this->city;
    }

    public function setRestCity($city)
    {
        $this->rest_city=$city;
    }

    public function getDistrict()
    {
        return $this->rdistrict;
    }

    public function setDistrict($district)
    {
        $this->rest_district=$district;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate=$rate;
    }
}

?>