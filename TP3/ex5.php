<!DOCTYPE html>
<html>
<head>
	<title>Calculatrice</title>
	<!-- inclusion du CSS de Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Calculatrice</h1>
		<form method="post">
			<div class="form-group">
				<label for="op1">Opérande 1 :</label>
				<input type="number" class="form-control" id="op1" name="op1">
			</div>
			<div class="form-group">
				<label for="op2">Opérande 2 :</label>
				<input type="number" class="form-control" id="op2" name="op2">
			</div>
			<div class="form-group">
				<label>Opération :</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="operation" id="addition" value="addition">
					<label class="form-check-label" for="addition">Addition</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="operation" id="soustraction" value="soustraction">
					<label class="form-check-label" for="soustraction">Soustraction</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="operation" id="multiplication" value="multiplication">
					<label class="form-check-label" for="multiplication">Multiplication</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="operation" id="division" value="division">
					<label class="form-check-label" for="division">Division</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Calculer</button>
		</form>
		<?php
			// Vérification de la soumission du formulaire
			if(isset($_POST['op1']) && isset($_POST['op2']) && isset($_POST['operation'])) {
				// Récupération des opérandes
				$op1 = $_POST['op1'];
				$op2 = $_POST['op2'];
				// Récupération de l'opération choisie
				$operation = $_POST['operation'];
				// Calcul du résultat en fonction de l'opération choisie
				switch($operation) {
					case 'addition':
						$resultat = $op1 + $op2;
						break;
					case 'soustraction':
						$resultat = $op1 - $op2;
						break;
					case 'multiplication':
						$resultat = $op1 * $op2;
						break;
					case 'division':
						$resultat = $op1 / $op2;
						break;
				}
				// Affichage du résultat
				echo '<div class="alert alert-primary mt-3" role="alert">Le résultat est : '.$resultat.'</div>';
			}
		?>
	</div>
</body>
</html>
