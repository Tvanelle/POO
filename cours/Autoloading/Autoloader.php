<?php
class Autoloader{
    /*

     Permet de creer et enregistrer l'autoloading 

    */
    
    public function RegisterAutoload()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    /*

    @param className
    Permet de definir l'autoloading en prenant en parametre le nom de la classe pour ensuite faire un require
    
    */

    function autoload($className){
        require 'Classes/'.$className.'.php';
    }
   
    
    
}
