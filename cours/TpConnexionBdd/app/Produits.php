<?php
class Produits{
    public function getNom(){
        return $this->nomProd;
    }
    public function getPrix(){
        return $this->prixProd;
    }
    public function getUrl(){
        return 'index.php?p=details&idProd='.$this->idProd;
    }
}