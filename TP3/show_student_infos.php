<!DOCTYPE html>
<html>
<head>
	<title>Informations sur l'étudiant</title>
	<!-- Inclure le CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
                        <?php
                        // Récupération du code de l'étudiant
                        $code = $_GET["code"];
                        
                        // Récupération des informations de l'étudiant à partir de votre base de données ou d'un autre système de stockage de données
                        // Remplacez les informations de l'étudiant ci-dessous par les informations que vous récupérez
                        $nom = "Dupont";
                        $prenom = "Pierre";
                        $age = "22";
                       
                        ?>
                        
                        <!-- Affichage des informations de l'étudiant dans une table Bootstrap -->
                        <div class="container">
                           <h1>Informations sur l'étudiant <?php echo $code; ?></h1>
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Code</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Âge</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><?php echo $code; ?></td>
                                    <td><?php echo $nom; ?></td>
                                    <td><?php echo $prenom; ?></td>
                                    <td><?php echo $age; ?></td>
                                 </tr>
                              </tbody>
                           </table>

                    
                        </div>
                        
