<?php
require "Personnage.php";
$Merlin = new Personnage();
$Henry = new Personnage();
echo $Merlin->getNom();
echo $Merlin->age;
$Merlin->helloWord("Mervy");
$Merlin->helloWord($Henry->getNom());
$Henry->AgePersonne(2);
echo "";
//var_dump($Merlin);
