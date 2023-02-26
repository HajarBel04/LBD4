<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire de contact</title>
    <!-- Chargement du framework Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Formulaire de contact</h1>
      <?php
      // Vérification si le formulaire a été soumis
      if(isset($_POST['submit'])) {
        // Récupération des données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $objet = $_POST['objet'];
        $message = $_POST['message'];
        $destinataire = $_POST['destinataire'];
        
        // Affichage des données saisies
        echo '<h2>Récapitulatif de votre message</h2>';
        echo '<p><strong>Nom:</strong> ' . $nom . '</p>';
        echo '<p><strong>Prénom:</strong> ' . $prenom . '</p>';
        echo '<p><strong>Email:</strong> ' . $email . '</p>';
        echo '<p><strong>Objet:</strong> ' . $objet . '</p>';
        echo '<p><strong>Message:</strong> ' . $message . '</p>';
        echo '<p><strong>Destinataire:</strong> ' . $destinataire . '</p>';
        } else {
        // Affichage du formulaire
        ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="objet">Objet</label>
                <input type="text" class="form-control" id="objet" name="objet" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>

            <div class="form-group">
                <label for="destinataire">Destinataire</label>
                <select class="form-control" id="destinataire" name="destinataire" required>
                <option value="">Sélectionnez une option</option>
                <option value="service_apres_vente">Service après-vente</option>
                <option value="service_technique">Service technique</option>
            </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
        </form>
      <?php } ?>
    </div>
   
