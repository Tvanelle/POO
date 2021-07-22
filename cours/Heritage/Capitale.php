<?php
class Capitale extends  Ville{
    public $lol="Cool";
    public function ListeMonuments(){
        return "Moi j'ai mes propres  monuments  qui sont donc </br> Zoo,Parc";
    }

    /*
    
    Permet d'appeler le constructeur de la classe parente
    
    */
    public function __construct(){
        $lol="Max de rire";
        parent::__construct();
    }
} 