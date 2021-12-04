<?php
//include 'config/config.php';
require __DIR__ . '/vendor/autoload.php';

use AppClasses\Actions\climb;
use AppClasses\Actions\swim;
use AppClasses\Animals\dog;
use AppClasses\Animals\tiger;



$name = 'dipesh';

echo "<br>class actions----";
$climb = new climb($name);
$rclimb = $climb->climb();
echo $rclimb;

$swim = new swim($name);
$rswim = $swim->swim();
echo $rswim;

echo '<br>class animals----';
$dog = new dog($name);
$rdog = $dog->dog();
echo $rdog;
$tiger = new tiger($name);
$rtiger = $tiger->tiger();
echo $rtiger;

// echo '<br>root class test----';
// $test = new \test($name);
// $rtest = $test->test();
// echo $rtest;
