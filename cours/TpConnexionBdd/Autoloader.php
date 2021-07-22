<?php
class Autoloader{
    public function RegisterAutoload()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    function autoload($className){
        require 'app/'.$className.'.php';
    }
}
   