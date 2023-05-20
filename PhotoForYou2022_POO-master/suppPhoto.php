<?php
// Récupération de l'identifiant de la photo
$id_photo = $_POST['id_photo'];


// Redirection vers la page d'accueil ou vers la liste des photos
header('Location: index.php');
exit;
?>