<?php 
require 'Autoloader.php';
$test=new Autoloader();
$test->RegisterAutoload();

//initialisation des objets//

$db=new Database('produits');

	if (isset($_GET['p'])) {
       $p=$_GET['p'];
       if ($p=='details') {
           require 'public/details.php';
       }
    }
    else{
        require 'public/home.php';
    }		
                		