<?php
use \zones\Autoloader;
use \zones\Ville;
require 'Autoloader.php';
$test=new Autoloader();
$test->RegisterAutoload();
$EddyMurpy=new Ville();
var_dump($EddyMurpy);
