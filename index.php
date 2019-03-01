<?php
use Imglol\User\User;
require_once "autoload/autoload.php";

$testUser = new User;
$test = $testUser->Test();

var_dump($test);




