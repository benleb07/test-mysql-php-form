<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=site1;charset=utf8', 'root', '');
    /*echo "vous etre connecte";*/
}
 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>