<!DOCTYPE html>
<html>
<head>
	<title>modiffication d'un vélo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</head>
<body>
	<h1>modifier un vélo</h1>
<?php
// Vérifier si le formulaire a été soumis
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $id = $_POST['id'];
    $name = $_POST['name'];
    $marque = $_POST['marque'];
    $prix = $_POST['prix'];

    // Connexion à la base de données
    $conn = new PDO("MariaDB:host=$servername;dbname=$dbname", $username, $password);

    // Préparer la requête de mise à jour
    $stmt = $pdo->prepare('UPDATE velo SET name = :name, marque = :marque, prix = :prix WHERE id = :id');

    // Exécuter la requête de mise à jour
    $stmt->execute(['name' => $name, 'marque' => $marque, 'prix' => $prix,'id' => $id]);

    // Rediriger vers la page d'accueil
    header('Location: index.php');
    exit;
}

// Récupérer l'ID du vélo à modifier à partir de la requête GET
$id = $_GET['id'];

// Connexion à la base de données
$conn = new PDO("MariaDB:host=$servername;dbname=$dbname", $username, $password);

// Préparer la requête de sélection du vélo à modifier
$stmt = $pdo->prepare('SELECT * FROM velo WHERE id = :id');

// Exécuter la requête de sélection du vélo à modifier
$stmt->execute(['id' => $id]);

// Récupérer l'utilisateur à modifier
$velo = $stmt->fetch();

?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $velo['id']; ?>">
    <label for="name">Nom :</label>
    <input type="text" name="name" value="<?php echo $velo['name']; ?>"><br>
    <label for="marque">Marque :</label>
    <input type="marque" name="marque" value="<?php echo $velo['marque']; ?>"><br>
    <label for="prix">Prix :</label>
    <input type="prix" name="prix" value="<?php echo $velo['prix']; ?>"><br>
    <button type="submit">Enregistrer</button>
</form>
