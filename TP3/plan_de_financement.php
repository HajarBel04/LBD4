<!DOCTYPE html>
<html>
<head>
    <title>Plan de financement pour l'achat d'un bien immobilier</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
    <?php
    // Récupération des données du formulaire
    $emploi = $_POST['emploi'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $montant = $_POST['montant'];
    $duree = $_POST['duree'];
    $assurance = isset($_POST['assurance']);

    // Validation des données
    $errors = array();
    if (empty($nom)) {
        $errors[] = "Le nom est obligatoire";
    }
    if (empty($prenom)) {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!is_numeric($montant)) {
        $errors[] = "Le montant de financement doit être un nombre réel";
    }
    if (!ctype_digit($duree) || $duree < 6 || $duree > 300) {
        $errors[] = "La durée en mois doit être un entier entre 6 et 300";
    }

    // Affichage des erreurs éventuelles
    if (!empty($errors)) {
        echo "<div class='alert alert-danger'><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";}
    echo "</ul></div>";
    }
    else{
    // Calcul du plan de financement
    switch ($emploi) {
        case 'fonctionnaire':
        $taux = 0.004;
        break;
        case 'salarié':
        $taux = 0.005;
        break;
        case 'profession-libérale':
        $taux = 0.006;
        break;
    }
    if ($assurance) {
        $taux += 0.0004;
    }
    $mensualite = $montant * ($taux / (1 - pow(1 + $taux, -$duree)));
    $total = $mensualite * $duree;

    // Affichage du tableau d'amortissement
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>Mois</th><th>Mensualité(MAD)</th><th>Intérêts(MAD)</th><th>Amortissemnt(MAD)</th><th>Capital restant(MAD)</th></tr></thead>";
    echo "<tbody>";
    $capital = $montant;
    for ($i = 1; $i <= $duree; $i++) {
        $interet = $capital * $taux;
        $amortissement = $mensualite - $interet;
        $capital = $capital - $amortissement;
        echo "<tr><td>$i</td><td>" . number_format($mensualite, 2) ." €</td><td>" . number_format($interet, 2) . " €</td><td>". number_format($amortissement, 2) . " €</td><td>". number_format($capital, 2) ."€</td></tr>";

    }
    echo "</tbody>";
    echo "</table>";

    // Affichage du récapitulatif
    echo "<div class='alert alert-success'>Le plan de financement pour $prenom $nom est le suivant :";
    echo "<ul><li>Montant de financement : " . number_format($montant, 2) . " €</li>";
    echo "<li>Durée : $duree mois</li>";
    echo "<li>Taux : " . ($taux * 100 * 12) . " %</li>";
    if ($assurance) {
        echo "<li>Assurance : Oui</li>";
    }
    else {
        echo "<li>Assurance : Non</li>";
    }
    }
    ?>
    </div>
