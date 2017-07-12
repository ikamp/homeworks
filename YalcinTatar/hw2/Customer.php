<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 04:40
 */
class Customer{
    protected  $customerID;
    protected $customerName;
    protected $customerEmail;
    protected $customerPassword;
    protected $customeraddress;
    protected $district;

    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @param mixed $customerID
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @param mixed $customerEmail
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @return mixed
     */
    public function getCustomerPassword()
    {
        return $this->customerPassword;
    }

    /**
     * @param mixed $customerPassword
     */
    public function setCustomerPassword($customerPassword)
    {
        $this->customerPassword = $customerPassword;
    }

    /**
     * @return mixed
     */
    public function getCustomeraddress()
    {
        return $this->customeraddress;
    }

    /**
     * @param mixed $customeraddress
     */
    public function setCustomeraddress($customeraddress)
    {
        $this->customeraddress = $customeraddress;
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
  public function login()
  {

  }
  public function register()
  {


  }



}

