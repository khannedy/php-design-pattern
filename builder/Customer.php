<?php


class Customer
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $fistName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    private $address;

    private $age;

    private $hobby;

    /**
     * Customer constructor.
     * @param string $id
     * @param string $fistName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     */
    public function __construct($id, $fistName, $lastName, $email, $phone, $address, $age, $hobby)
    {
        $this->id = $id;
        $this->fistName = $fistName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->age = $age;
        $this->hobby = $hobby;
    }

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
    public function getFistName()
    {
        return $this->fistName;
    }

    /**
     * @param mixed $fistName
     */
    public function setFistName($fistName)
    {
        $this->fistName = $fistName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}