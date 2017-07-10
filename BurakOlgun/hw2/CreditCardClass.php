<?php

/**
 * Class CreditCardClass
 */
class CreditCardClass
{
    private $creditCardName;
    private $cardNo;
    private $cardCVC;

    /**
     * @return mixed
     */
    public function getCreditCardName()
    {
        return $this->creditCardName;
    }

    /**
     * @param mixed $creditCardName
     */
    public function setCreditCardName($creditCardName)
    {
        $this->creditCardName = $creditCardName;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param mixed $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return mixed
     */
    public function getCardCVC()
    {
        return $this->cardCVC;
    }

    /**
     * @param mixed $cardCVC
     */
    public function setCardCVC($cardCVC)
    {
        $this->cardCVC = $cardCVC;
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
    private $bank;
}