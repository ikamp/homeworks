<?php

class OrderDetail{

    private $totalprice;
    private $paymentMethod;
    private $promoCode;

    /**
     * @return mixed
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param mixed $promoCode
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param mixed $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return mixed
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * @param mixed $totalprice
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }

    public function giveOrder()
    {

    }
}

?>