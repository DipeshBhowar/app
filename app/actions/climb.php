<?php
namespace App\Actions;

class climb
{
    public $name = null;
    public function __construct($name)
    {
        if (isset($name)) $this->name = $name;
    }

    public function climb()
    {
        return "dont climb " . $this->name;
    }
}
?>