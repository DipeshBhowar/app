<?php
spl_autoload_register(function ($classname) {
    // if (file_exists('appClasses/actions/' . $classname . '.php')) {
    //     include_once 'appClasses/actions/' . $classname . '.php';
    // } elseif (file_exists('appClasses/animals/' . $classname . '.php')) {
    //     include_once 'appClasses/animals/' . $classname . '.php';
    // } else {
    //     include_once $classname . '.php';
    // }
    include_once str_replace("\\", "/", $classname) . '.php';
});
