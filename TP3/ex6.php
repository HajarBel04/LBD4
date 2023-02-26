<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <!-- Inclusion de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Inscription</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="civilite">Civilité:</label>
                <select class="form-control" id="civilite" name="civilite">
                    <option value="Mlle">Mlle</option>
                    <option value="Mme">Mme</option>
                    <option value="M.">M.</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php if(isset($_POST['nom'])) {echo htmlspecialchars($_POST['nom']);} ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php if(isset($_POST['prenom'])) {echo htmlspecialchars($_POST['prenom']);} ?>">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance:</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?php if(isset($_POST['date_naissance'])) {echo htmlspecialchars($_POST['date_naissance']);} ?>">
            </div>
            <div class="form-group">
                <label>Formations:</label><br>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 1">Formation 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 2">Formation 2</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 3">Formation 3</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 4">Formation 4</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 5">Formation 5</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 6">Formation 6</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 7">Formation 7</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 8">Formation 8</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 9">Formation 9</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="formations[]" value="Formation 10">Formation 10</label>
                </div>
            </div>

            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
            </div>

            <div class="form-group">
            <label for="re_mot_de_passe">Réécrire mot de passe:</label>
            <input type="password" class="form-control" id="re_mot_de_passe" name="re_mot_de_passe">
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $erreurs = [];

        // Vérification de la civilité
        if(!isset($_POST['civilite'])) {
            $erreurs['civilite'] = 'La civilité doit être renseignée.';
        }

        // Vérification du nom
        if(empty($_POST['nom'])) {
            $erreurs['nom'] = 'Le nom doit être renseigné.';
        }

        // Vérification du prénom
        if(empty($_POST['prenom'])) {
            $erreurs['prenom'] = 'Le prénom doit être renseigné.';
        }

        // Vérification de la date de naissance
        if(empty($_POST['date_naissance'])) {
            $erreurs['date_naissance'] = 'La date de naissance doit être renseignée.';
        }

        // Vérification des formations
        if(empty($_POST['formations'])) {
            $erreurs['formations'] = 'Au moins une formation doit être sélectionnée.';
        }

        // Vérification du mot de passe
        if(empty($_POST['mot_de_passe'])) {
            $erreurs['mot_de_passe'] = 'Le mot de passe doit être renseigné.';
        }

        // Vérification de la réécriture du mot de passe
        if(empty($_POST['re_mot_de_passe'])) {
            $erreurs['re_mot_de_passe'] = 'La réécriture du mot de passe doit être renseignée.';
        } elseif($_POST['mot_de_passe'] !== $_POST['re_mot_de_passe']) {
            $erreurs['re_mot_de_passe'] = 'Les deux mots de passe ne sont pas identiques.';
        }

        // Affichage des erreurs
        if(!empty($erreurs)) {
            echo '<div class="alert alert-danger">';
            foreach($erreurs as $erreur) {
                echo $erreur.'<br>';
            }
            echo '</div>';
        } else {
            // Affichage des informations saisies par l'utilisateur
            echo '<table class="table">';
            echo '<tr><td>Civilité:</td><td>'.htmlspecialchars($_POST['civilite']).'</td></tr>';
            echo '<tr><td>Nom:</td><td>'.htmlspecialchars($_POST['nom']).'</td></tr>';
            echo '<tr><td>Prénom:</td><td>'.htmlspecialchars($_POST['prenom']).'</td></tr>';
            echo '<tr><td>Date de naissance:</td><td>'.htmlspecialchars($_POST['date_naissance']).'</td></tr>';
            echo '<tr><td>Formations:</td><td>';
            foreach($_POST['formations'] as $formation) {
                echo htmlspecialchars($formation).'<br>';
            }
            echo '</td></tr>';
            echo '</table>';
            }
            }
            ?>
            
    </div>
</body>
</html>            

