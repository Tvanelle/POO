<?php

class Database{
    private $dbname;
    private $dbhost;
    private $dbuser;
    private $dbpwd;
    private $bdd;
    function __construct($dbname='produits',$dbhost='localhost',$dbuser='root',$dbpwd=''){
    $this->dbname=$dbname;
    $this->dbhost=$dbhost;
    $this->dbuser=$dbuser;
    $this->dbpwd=$dbpwd;
    }
    public function getPdo(){
       $bdd=new PDO('mysql:host=localhost;dbname=produits','root','');
       $this->bdd=$bdd;
        return $bdd;
    } 
    public function query($statement,$className){
        $req=$this->getPdo()->query($statement);
        $data=$req->fetchAll(PDO::FETCH_CLASS,$className);
        return $data;
        
    }
    public function prepare($statement,$attribute,$className){
        $req=$this->getPdo()->prepare($statement);
        
        $data=$req->fetchAll(PDO::FETCH_CLASS,$className);
        return $data;
        
    }
}