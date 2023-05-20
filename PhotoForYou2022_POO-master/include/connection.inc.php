<?php
$hote = '127.0.0.1:3306';
$db = 'photoforyou';
$login = 'root';
$motDePasse ='';
$erreur = null;

try
{
    $db = new PDO("mysql:host=$hote;dbname=$db;charset=utf8", $login, $motDePasse);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
     $error = "Erreur dans la connexion: ".$e->getMessage();
     echo "<div class='alert alert-danger'>$error</div>";
}

  