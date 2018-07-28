<?php
require_once 'Worker5.php';

class Driver extends Worker5
{
    private $experience;
    private $category;

    // Set data
    public function setExperience(int $experience)
    {
        $this->experience = $experience;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    // Get data
    public function getExperience() : int
    {
        return $this->experience;
    }

    public function getCategory() : string
    {
        return $this->category;
    }
}