<?php

class Worker4
{
    private $name;
    private $age;
    private $salary;

    public function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Get data
    public function getAge() : int
    {
        return $this->age;
    }

    public function getSalary() : int
    {
        return $this->salary;
    }
}