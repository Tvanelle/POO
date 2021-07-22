<?php
namespace zones;
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
        $className=str_replace(__NAMESPACE__.'\\', '',$className);
        require $className.'.php';
    }
    
   
    
    
}
