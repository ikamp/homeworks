<?php

/**
 * Class Adress
 */
class Adress
{
    private $adressName;
    private $city;
    private $district;
    private $street;
    private $no;


    /**
     * @return mixed
     */
    public function getAdressName()
    {
        return $this->adressName;
    }

    /**
     * @param mixed $adressName
     */
    public function setAdressName($adressName)
    {
        $this->adressName = $adressName;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * @param mixed $no
     */
    public function setNo($no)
    {
        $this->no = $no;
    }

}