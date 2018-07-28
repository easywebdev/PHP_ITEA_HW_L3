<?php

class User
{
    protected $name;
    protected $age;

    // Get data
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    // Set data
    public function getNamr() : string
    {
        return $this->name;
    }

    public function getAge() : int
    {
        return $this->age;
    }
}