<?php


class CustomerBuilder
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
    private $lastName = "";

    /**
     * @var string
     */
    private $email = "";

    /**
     * @var string
     */
    private $phone = "";

    private $address = "";

    private $age = 0;

    private $hobby = "";

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $fistName
     */
    public function setFistName($fistName)
    {
        $this->fistName = $fistName;
        return $this;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param string $hobby
     */
    public function setHobby(string $hobby)
    {
        $this->hobby = $hobby;
        return $this;
    }

    public function build(): Customer
    {
        return new Customer(
            $this->id,
            $this->fistName,
            $this->lastName,
            $this->email,
            $this->phone,
            $this->address,
            $this->age,
            $this->hobby
        );
    }

}