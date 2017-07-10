<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 21:19
 */

namespace FoodBasket;


class Payment
{
    protected $id;
    protected $price;
    protected $date;
    protected $bank;
    protected $acccountNumber;
    protected $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param mixed $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return mixed
     */
    public function getAcccountNumber()
    {
        return $this->acccountNumber;
    }

    /**
     * @param mixed $acccountNumber
     */
    public function setAcccountNumber($acccountNumber)
    {
        $this->acccountNumber = $acccountNumber;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function addPayment()
    {

    }

    public function setPayment()
    {

    }

    public function dropPayment()
    {

    }
}