<?php
// Informations de connexion à la base de données
$servername = "127.0.0.1";
$username = "root@localhost";
$password = "";
$dbname = "stationb";

try {
    // Création de la connexion PDO à la base de données
    $conn = new PDO("MariaDB:host=$servername;dbname=$dbname", $username, $password);
    // Configuration de l'attribut pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
