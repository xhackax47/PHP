<?php

namespace App;

class Person
{
    protected $firstName;
    protected $lastName;
    protected $email;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
}

$person1 = new Person();

// Fluent

$person1->setFirstName("FirstName 1")->setLastName("LastName 1")->setEmail("FirstName1@LastName1");

// Builder

class SqlQueryBuilder
{

}

$builder = new SqlQueryBuilder();
$builder->select('name')->select('firstName')->from('user')->where('age>18');

if($onlyEmployee = True) {
    $builder->where('type == "employee"')->select('firstName');
}

$sql = $builder->getQuery();