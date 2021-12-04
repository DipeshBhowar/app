<?php

    class test{
        public $name = null;
        public function __construct($name)
        {
            if(isset($name)) $this->name = $name;
        }

        public function test(){
            return "this is a test " . $this->name;
        }
    }
?>