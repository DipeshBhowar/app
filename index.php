<?php
//include 'config/config.php';

use App\Actions\Climb;
use App\Actions\Run;
use App\Animals\Dog;
use App\Animals\tiger;

require 'vendor/autoload.php';

$name = 'dipesh';

echo "<br>class actions----";
$climb = new Climb($name);
$rclimb = $climb->climb();
echo $rclimb;

$swim = new Run($name);
$rswim = $swim->run();
echo $rswim;

echo '<br>class animals----';
$dog = new Dog($name);
$rdog = $dog->dog();
echo $rdog;
$tiger = new tiger($name);
$rtiger = $tiger->tiger();
echo $rtiger;

// echo '<br>root class test----';
// $test = new \test($name);
// $rtest = $test->test();
// echo $rtest;
