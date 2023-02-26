<!DOCTYPE html>
<html>
<head>
	<title>Informations sur l'étudiant</title>
	<!-- Inclure le CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
        <?php
            // Récupération des informations saisies par l'utilisateur
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $objet = $_POST["objet"];
            $service = $_POST["service"];
            $message = $_POST["message"];
            ?>

<!-- Affichage des informations saisies par l'utilisateur -->
<h1>Informations saisies par l'utilisateur :</h1>
<ul>
   <li>Nom : <?php echo $nom; ?></li>
   <li>Prénom : <?php echo $prenom; ?></li>
   <li>Email : <?php echo $email; ?></li>
   <li>Objet : <?php echo $objet; ?></li>
   <li>Service : <?php echo $service; ?></li>
   <li>Message : <?php echo $message; ?></li>
</ul>
</body>