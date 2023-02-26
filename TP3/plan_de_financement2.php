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

     // Récupérer les données du formulaire
    $emploi = $_POST['emploi'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['date_naissance'];
    $montant = $_POST['montant'];
    $salaire = $_POST['salaire'];
    $mensualitesAutresCredits = $_POST['mensualites_autres_credits'];
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


  
          // Calcul de l'âge de l'emprunteur
          $age = date_diff(date_create($date_naissance), date_create('today'))->y;
  
          // Vérification de l'âge
          if ($age >= 62 && $duree <= (62 - $age)) {
            // Calcul de la mensualité
            $taux_mensuel = $taux / 12 / 100;
            $mensualite = ($montant * $taux_mensuel) / (1 - pow(1 + $taux_mensuel, -$duree));
            exit;
          }
  
            // Vérification de la capacité d'emprunt
            $total_mensualites = $mensualite + $mensualitesAutresCredits;
            $seuil_endettement = $salaire * 50 / 100;
            $seuil_max_mensualites = $salaire * 52 / 100 - $mensualitesAutresCredits;
  
            if ($total_mensualites <= $seuil_endettement || $mensualite <= $seuil_max_mensualites) {
  
              // Affichage du tableau d'amortissement
              echo '<h2>Tableau d\'amortissement</h2>';
  
              echo '<table class="table">';
              echo '<thead class="thead-light">';
              echo '<tr>';
              echo '<th scope="col">Mois</th>';
              echo '<th scope="col">Capital restant dû</th>';
              echo '<th scope="col">Intérêts</th>';
              echo '<th scope="col">Capital amorti</th>';
              echo '<th scope="col">Mensualité</th>';
              echo '</tr>';
              echo '</thead>';
  
              echo '<tbody>';
              $capital_restant = $montant;
              for ($i=1; $i<=$duree; $i++) {
                $interets = $capital_restant * $taux_mensuel;
                $capital_amorti = $mensualite - $interets;
                $capital_restant -= $capital_amorti;
                echo '<tr>';
                echo '<th scope="row">'.$i.'</th>';
                echo '<td>'.round($capital_restant, 2).'</td>';
                echo '<td>'.round($interets, 2).'</td>';
                echo '<td>'.round($amortissement, 2).'</td>';
                echo '</tr>';

                // Mise à jour du capital restant
                $capital_restant -= $amortissement;
                }
                echo '</tbody></table>';

               
                // Vérification du taux d'endettement
                $mensualite_totale = $mensualite + $total_mensualitesmensualitesAutresCredits_autres_credits;
                $taux_endettement = $mensualite_totale / $salaire * 100;
                if ($taux_endettement > 50) {
                  // Calcul du montant maximum de crédit possible
                  $max_credit = ($salaire * 0.52 - $total_mensualites_autres_credits) / $taux;

                  // Affichage du message d'erreur
                  echo '<div class="alert alert-danger" role="alert">';
                  echo 'Désolé, votre demande de crédit ne peut être acceptée. Votre taux d\'endettement est trop élevé. Vous pouvez emprunter jusqu\'à '.$max_credit.' € maximum.';
                  echo '</div>';
                }
              }




/*
    // Calcul de l'âge de l'emprunteur
    $age = date_diff(date_create($naissance), date_create('now'))->y;

    // Vérification que la durée se trouve dans l'intervalle de fonction
    if ($age < 62 && $duree > ($age - 18) * 12) {
    echo "Durée non autorisée pour votre âge.";
    exit;
    }

    // Calcul du paiement mensuel
    $r = $taux / 12;
    $n = $duree * 12;
    $facteur = (1 + $r) ** $n;
    $mensualite = ($montant * $r * $facteur) / ($facteur - 1);

    // Vérification de l'endettement maximum
    if ($mensualite + $mensualites_autres_credits > 0.5 * $salaire) {
    $montant_max = (($salaire * 0.52) - $mensualites_autres_credits) / $mensualite;
    echo "Le montant maximum que vous pouvez emprunter est de " . $montant_max . ".";
    exit;
    }

    // Calcul du tableau d'amortissement
    $solde = $montant;
    $interet_cumule = 0;
    $capital_cumule = 0;
    echo "<table class='table'><thead><tr><th>Période</th><th>Paiement</th><th>Intérêts</th><th>Capital</th><th>Assurance</th><th>Solde restant</th></tr></thead><tbody>";
    for ($i = 1; $i <= $n; $i++) {
    $interet = $solde * $r;
    $capital = $mensualite - $interet - $assurance;
    $solde -= $capital;
    $interet_cumule += $interet;
    $capital_cumule += $capital;
    echo "<tr><td>" . $i . "</td><td>" . number_format($mensualite + $assurance, 2) . "€</td><td>" . number_format($interet, 2) . "€</td><td>" . number_format($capital, 2) . "€</td><td>" . number_format($assurance, 2) . "€</td><td>" . number_format($solde, 2) . "€</td></tr>";
    }
    echo "</tbody></table>";
  }
    

/*


    // Récupérer les données du formulaire
    $emploi = $_POST['emploi'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['date_naissance'];
    $montant = $_POST['montant'];
    $salaire = $_POST['salaire'];
    $mensualitesAutresCredits = $_POST['mensualites_autres_credits'];
    $duree = $_POST['duree'];
    $assurance = isset($_POST['assurance']);



   /* // Validation des données
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

  // Calculer l'âge de l'emprunteur
  $today = new DateTime();
  $birthdate = new DateTime($naissance);
  $age = $today->diff($birthdate)->y;

  // Vérifier que la durée demandée se trouve dans l'intervalle de fonction
  if ($duree > (62 - $age) * 12) {
    echo "Durée de prêt invalide";
    exit;
  }

  // Calculer le montant maximum que peut emprunter l'emprunteur
  $mensualiteMax = $salaire * 0.52 - $mensualitesAutresCredits;
  $montantMax = $montant;
  while (calcMensualite($montantMax, $duree, $taux) > $mensualiteMax) {
    $montantMax -= 1000;
  }

// Calculer le tableau d'amortissement
$capital = $montant;
$tauxPeriodique = $taux / 12;
$mensualite = calcMensualite($montant, $duree, $taux);
$totalInterets = 0;
$tableau = array();

for ($i = 1; $i <= $duree; $i++) {
  $interets = $capital * $tauxPeriodique;
  $amortissement = $mensualite - $interets;

  if ($capital - $amortissement < 0) {
    $amortissement = $capital;
    $mensualite = $amortissement + $interets;
  }

  $capital -= $amortissement;
  $totalInterets += $interets;

  $ligne = array(
    "mois" => $i,
    "mensualite" => round($mensualite, 2),
    "amortissement" => round($amortissement, 2),
    "interets" => round($interets, 2),
    "capital_restant" => round($capital, 2)
  );

  array_push($tableau, $ligne);
}

// Fonction pour calculer le paiement mensuel
function calcMensualite($capital, $duree, $taux) {
  $tauxPeriodique = $taux / 12;
  $mensualite = ($capital * $tauxPeriodique) / (1 - pow(1 + $tauxPeriodique, -$duree));
  return $mensualite;
}

// Afficher le tableau d'amortissement
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Mois</th>";
echo "<th>Mensualité</th>";
echo "<th>Amortissement</th>";
echo "<th>Intérêts</th>";
echo "<th>Capital restant</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


  foreach ($tableau as $ligne) {
    echo "<tr>";
    echo "<td>" . $ligne["mois"] . "</td>";
    echo "<td>" . $ligne["mensualite"] . "</td>";
    echo "<td>" . $ligne["amortissement"] . "</td>";
    echo "<td>" . $ligne["interets"] . "</td>";
    echo "<td>" . $ligne["capital_restant"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";*/
}
  ?>
  </div>
  
  
  
  
  
