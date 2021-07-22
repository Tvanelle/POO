<?php 
class Ville{
public $nom;
public $superficie;
public $nbHbts;
public function __construct(){
$this->nom="Philadelphie";
$this->superficie=4522222;
}
public function ListeMonuments(){
    return "Tous nos monuments sont donc </br> Musé nationale,Zoo,Parc";
}
}