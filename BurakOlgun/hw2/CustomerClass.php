<?php
use CommentClass;
use FoodBag;
use Restaurant;



 /**
 * Class Customer
 */
class Customer
{
    private $name;
    private $surname;
    private $mail;
    private $phoneNumber;
    private $adresses;
    private $password;
    private $creditCards;

    /**
     * Customer constructor.
     * @param $name
     * @param $surname
     * @param $mail
     * @param $phoneNumber
     * @param $password
     */
    public function __construct($name, $surname, $mail, $phoneNumber, $password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
    }

    /**
     * @param FoodBag $foodBag
     * @param Restaurant $restaurant
     * @return int
     */
    protected function addOrder(FoodBag $foodBag , Restaurant $restaurant)
    {
        return 0 ;
    }

    /**
     * @param Restaurant $restaurant
     * @param Comment $comment
     * @return int
     */
    protected function addComment(Restaurant $restaurant , Comment $comment)
    {
        return 0;
    }

    /**
     * @param Adress $adress
     * @return Adress
     */
    protected function addAdress(Adress $adress )
    {
        return $adress;
    }

    /**
     * @param CreditCard $creditCard
     * @return int
     */
    protected function addCreditCard(CreditCard $creditCard)
    {
        return 0 ;
    }

    /**
     * @param PaymentType $paymentType
     * @param FoodBag $foodBag
     * @return int
     */
    protected function payOrders(PaymentType $paymentType , FoodBag $foodBag)
    {
        return $order = 1;
    }

    /**
     * @param $order
     * @return int
     */
    protected function pay($order)
    {
        return $status = 1;
    }
     /**
     * @return mixed
     */
    protected function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    protected function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    protected function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    protected function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    protected function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    protected function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    protected function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    protected function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    protected function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * @param mixed $adresses
     */
    protected function setAdresses($adresses)
    {
        $this->adresses = $adresses;
    }

    /**
     * @return mixed
     */
    protected function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    protected function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    protected function getCreditCards()
    {
        return $this->creditCards;
    }

    /**
     * @param mixed $creditCards
     */
    protected function setCreditCards($creditCards)
    {
        $this->creditCards = $creditCards;
    }
}
