<?php

namespace App\Actions;

    class Run
    {
        public $name = null;
        public function __construct($name)
        {
            if (isset($name)) $this->name = $name;
        }

        public function run()
        {
            return "run fast " . $this->name;
        }
    }

