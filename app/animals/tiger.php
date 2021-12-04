<?php

namespace App\Animals;

class tiger
{
    public $name = null;
    public function __construct($name)
    {
        if (isset($name)) $this->name = $name;
    }

    public function tiger()
    {
        return "this is a tiger " . $this->name;
    }
}
