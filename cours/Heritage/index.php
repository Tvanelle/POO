<?php
require 'Ville.php';
require 'Capitale.php';
require 'chefLieu.php';
$Louvre=new Ville();
$Tunis=new Capitale();
$Est=new chefLieu();
var_dump($Tunis,$Louvre);
 echo $Louvre->ListeMonuments();
echo $Tunis->ListeMonuments();
var_dump($Est);