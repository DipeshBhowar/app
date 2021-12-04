<?php

namespace App\Actions;

    class run
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

