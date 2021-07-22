<?php
require 'Autoloader.php';
$next=new Autoloader();
$next->RegisterAutoload();
$idaho=new Ville();
var_dump($idaho);
$idaho=new Personnage();
var_dump($idaho);