<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'envoi de courriels</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Formulaire d'envoi de courriels</h1>
		<form action="destination.php" method="post">

			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" required>
			</div>

			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" id="prenom" name="prenom" required>
			</div>

			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>

			<div class="form-group">
				<label for="objet">Objet :</label>
				<input type="text" class="form-control" id="objet" name="objet" required>
			</div>

			<div class="form-group">
				<label for="destinataire">Destinataire :</label>
				<select class="form-control" id="destinataire" name="destinataire">
					<option value="service_apres_vente">Service après-vente</option>
					<option value="technique">Technique</option>
				</select>
                
			</div>
			<div class="form-group">
				<label for="message">Message :</label>
				<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
	