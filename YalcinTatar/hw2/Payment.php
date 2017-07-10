<?php
/**
 * Created by PhpStorm.
 * User: yalcin
 * Date: 07.07.2017
 * Time: 07:00
 */


class Payment extends OrderDetails
{
    private $creditCardOwner;
    private $creditCardNo;
    private $dateOfExpiry;
    private $securityNumber;
    private $paymentOption;


    /**
     * @return mixed
     */
    public function getCreditCardOwner()
    {
        return $this->creditCardOwner;
    }

    /**
     * @param mixed $creditCardOwner
     */
    public function setCreditCardOwner($creditCardOwner)
    {
        $this->creditCardOwner = $creditCardOwner;
    }

    /**
     * @return mixed
     */
    public function getCreditCardNo()
    {
        return $this->creditCardNo;
    }

    /**
     * @param mixed $creditCardNo
     */
    public function setCreditCardNo($creditCardNo)
    {
        $this->creditCardNo = $creditCardNo;
    }

    /**
     * @return mixed
     */
    public function getDateOfExpiry()
    {
        return $this->dateOfExpiry;
    }

    /**
     * @param mixed $dateOfExpiry
     */
    public function setDateOfExpiry($dateOfExpiry)
    {
        $this->dateOfExpiry = $dateOfExpiry;
    }

    /**
     * @return mixed
     */
    public function getSecurityNumber()
    {
        return $this->securityNumber;
    }

    /**
     * @param mixed $securityNumber
     */
    public function setSecurityNumber($securityNumber)
    {
        $this->securityNumber = $securityNumber;
    }

    /**
     * @return mixed
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * @param mixed $paymentOption
     */
    public function setPaymentOption($paymentOption)
    {
        $this->paymentOption = $paymentOption;
    }

    public function makePayment()
    {
        $this->getTotalPrice();



    }

}
