<?php

namespace App\Actions;

class swim
{
    public $name = null;
    public function __construct($name)
    {
        if (isset($name)) $this->name = $name;
    }

    public function swim()
    {
        return "keep swimming " . $this->name;
    }
}
