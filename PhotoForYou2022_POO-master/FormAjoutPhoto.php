<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajout de photo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1>Ajout de photo</h1>
    <form action="ajout_photo.php" method="post" enctype="multipart/form-data">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" required>
        <br><br>
        <label for="description">Description :</label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
        <br><br>
        <label for="fichier">Fichier :</label>
        <input type="file" name="fichier" id="fichier" required>
        <label for="prix">Prix :</label>
        <input type="int" name="prix" id="prix" required>
        <br><br>
        <input type="submit" value="Ajouter la photo">
    </form>
</body>
</html>
