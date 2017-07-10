<?php

/**
 * Created by PhpStorm.
 * User: eren
 * Date: 06/07/2017
 * Time: 20:47
 */

namespace FoodBasket;


abstract class Person
{
    protected $id;
    protected $name;
    protected $email;
    protected $pass;
    protected $accessType;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * @param mixed $accessType
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    }

    public function login()
    {

    }

    public function register()
    {

    }
    public function updateProfile()
    {

    }
}