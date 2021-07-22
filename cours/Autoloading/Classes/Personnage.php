<?php

/*class Personnage
Permet de creer et manipulé un  personnage*/

class Personnage
{

/*@var 
Se sont les variables necessaire pour creer un personnage*/

    private $nom;
    private $role;
    private $vie;
    public $age;

/*Constructeur permet la creation d'un personnage */

public function __construct(){
    $this->nom="Tiotsop";
    $this->role="principale";
    $this->vie="pas mal";
    $this->age=19;
}

/* @ager
Permet d'ajouter l'age du personage
*/

 public function AgePersonne($ager)
{
    $this->age=$ager+$this->age;
    echo "votre nouvel age est".$this->age;
}
public function helloWord($perso){
    echo "bonjour Mlle".$perso;
}
public function getNom(){
    return   $this->nom;
}
public function getRole(){
    return   $this->role;
}
public function getAge(){
    return   $this->age;
}
public function getVie(){
    return   $this->vie;
}
}