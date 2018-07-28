<?php
require_once 'User.php';

class Student extends User
{
    private $grant;
    private $cource;

    // Set data
    public function setGrant(int $grant)
    {
        $this->grant = $grant;
    }

    public function setCource(string $cource)
    {
        $this->cource = $cource;
    }

    // Get data
    public function getGrant() : int
    {
        return $this->grant;
    }

    public function getCource() : string
    {
        return $this->cource;
    }
}