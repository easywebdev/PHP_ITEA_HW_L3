<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 27.07.18
 * Time: 21:48
 */

class Worker2
{
    private $name;
    private $age;
    private $salary;

    // Check age
    private function checkAge(int $age) : bool
    {
        $result = false;

        if($age < 100 && $age > 1) {
            $result = true;
        }

        return $result;
    }

    // Set data
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        if($this->checkAge($age)) {
            $this->age = $age;
        }
        else {
            echo 'Age ' . $age . ' years is not correct';
        }
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    // Get data
    public function getName() : string
    {
        return $this->name;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function getSalary() : int
    {
        return $this->salary;
    }
}