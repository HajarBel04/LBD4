<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
                $notes = array(15, 12, 13, 20, 11, 20, 14, 16, 10, 19);

                // 1. Afficher tous les éléments du tableau
                function afficherTableau($tableau) {
                    foreach ($tableau as $value) {
                        echo $value . " ";
                    }
                    echo "\n";
                }
        
                // 2. Calculer la moyenne des éléments du tableau
                function calculerMoyenne($tableau) {
                    $somme = 0;
                    $taille = count($tableau);
                    foreach ($tableau as $value) {
                        $somme += $value;
                    }
                    return $somme / $taille;
                }
        
                // 3. Indiquer combien d’étudiants ont une note > 10
                function etudiantsAvecNoteSuperieureA10($tableau) {
                    $compteur = 0;
                    foreach ($tableau as $value) {
                        if ($value > 10) {
                            $compteur++;
                        }
                    }
                    return $compteur;
                }
        
                // 4. Afficher combien de fois la note 20 apparait
                function compterNote20($tableau) {
                    $compteur = 0;
                    foreach ($tableau as $value) {
                        if ($value == 20) {
                            $compteur++;
                        }
                    }
                    return $compteur;
                }
        
                // 5. Trier le tableau d’une manière ascendante sans se servir des fonctions de trie.
                function trierTableauAscendant($tableau) {
                    $taille = count($tableau);
                    for ($i = 0; $i < $taille - 1; $i++) {
                        for ($j = $i + 1; $j < $taille; $j++) {
                            if ($tableau[$i] > $tableau[$j]) {
                                $temp = $tableau[$i];
                                $tableau[$i] = $tableau[$j];
                                $tableau[$j] = $temp;
                            }
                        }
                    }
                    return $tableau;
                }
        
                // 6. Chercher si une valeur existe dans le tableau, si c’est le cas afficher son indice
                function chercherValeur($tableau, $valeur) {
                    $taille = count($tableau);
                    for ($i = 0; $i < $taille; $i++) {
                        if ($tableau[$i] == $valeur) {
                            return $i;
                        }
                    }
                    return -1;
                }
        
                echo "Tableau de notes : \n";
                afficherTableau($notes);
               
                echo "<br>";
                echo "Moyenne des notes : " . calculerMoyenne($notes). "\n" ,"<br>";
        
                echo "Nombre d'étudiants avec une note supérieure à 10 : " . etudiantsAvecNoteSuperieureA10($notes) . "\n","<br>";
        
                echo "Nombre de fois où la note 20 apparaît : " . compterNote20($notes) . "\n","<br>";
        
                echo "Tableau de notes trié dans l'ordre ascendant : \n";
                print_r(trierTableauAscendant($notes));
                echo "<br>";
                $valeurRecherchee = 20;
                $index = chercherValeur($notes, $valeurRecherchee);
                if ($index != -1) {
                    echo "La valeur " . $valeurRecherchee . " existe dans le tableau à l'index " . $index . "\n";
                } else {
                    echo "La valeur " . $valeurRecherchee . " n'existe pas dans le tableau.\n";
                }
        
                
                       
                echo "<br><br>";
                ?>
    </body>