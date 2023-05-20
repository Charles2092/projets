<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un vélo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Ajout d'un vélo</h1>
	<form method="POST" action="ajout_velo.php">
		<label for="marque">Marque:</label>
		<input type="text" name="marque" required>
		<br>
		<label for="nom">nom:</label>
		<input type="text" name="nom" required>
		<br>
		<label for="prit">prix:</label>
		<input type="int" name="prix" required>
		<br>
		<input type="submit" value="Ajouter">
	</form>
</body>
</html>