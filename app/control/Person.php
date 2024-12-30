<?php

namespace App\Control; // DECLARE NAMESPACE

class Person
{
    private $name;
    private $age;
    private $email;

    public function __construct($name, $age, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}

























































//
//namespace app\control;
//
//class app\control\Person
//{
//    private $name;
//    private $age;
//    private $email;
//
//    public function __construct($name, $age, $email)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->email = $email;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setEmail($email)
//    {
//        $this->email = $email;
//    }
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//}