<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $fichier = $_FILES["fichier"];

    // Vérifier que le fichier est bien une image
    $type = $fichier["type"];
    if ($type != "image/jpeg" && $type != "image/png" && $type != "image/gif") {
        echo "Erreur : le fichier doit être une image JPEG, PNG ou GIF.";
        exit();
    }

    // Déplacer le fichier vers le répertoire de destination
    $chemin = "uploads/" . $fichier["name"];
    move_uploaded_file($fichier["tmp_name"], $chemin);

    //

    echo "La photo a été ajoutée avec succès !";
}
?>
