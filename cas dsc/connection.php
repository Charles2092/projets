<?php

$host = "127.0.0.1";
$port=3307;
$db = "dsc";
$user = "root";
$pw ="";
// connection à la base de données avec test si il y a une erreur
try
{
    $pdo = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$db.'', $user, $pw);
}
catch (Exception $e)
{
     die('Erreur : ' . $e->getMessage());
}

?>