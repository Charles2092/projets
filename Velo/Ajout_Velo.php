<?php
require 'connexionDB.php';

// Récupération des données du formulaire
$marque = $_POST['marque'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];

try {
    $conn = new PDO("MariaDB:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête d'insertion
    $sql = "INSERT INTO velo (marque, nom, prix) VALUES (:marque, :nom, :prix)";
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête
    $stmt->execute(['marque' => $marque, 'nom' => $nom, 'prix' => $prix]);

    echo "Vélo ajouté avec succès.";
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
