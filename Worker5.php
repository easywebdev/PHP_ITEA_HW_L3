<?php
require_once 'User.php';

class Worker5 extends User
{
    private $salary;

    // Set data
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    // Get data
    public function getSalary () : int
    {
        return $this->salary;
    }
}