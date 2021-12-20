<?php

namespace App\Animals;

class Dog
{
    public $name = null;
    public function __construct($name)
    {
        if (isset($name)) $this->name = $name;
    }

    public function dog()
    {
        return "this is a dog " . $this->name;
    }
}
