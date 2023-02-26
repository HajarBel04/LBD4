<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 
            'Octobre', 'Novembre', 'Décembre'); 
            
            //Q1 . Afficher les éléments du tableau sous format : 1 – Janvier 
            //en utilisant la boucle for
            for ($i = 1; $i <= count($moisFr); $i++) {
                echo $i . " – " . $moisFr[$i] . "<br>";
            }
            // en utilisant la boucle foreach
            foreach ($moisFr as $key => $value) {
                echo $key . " – " . $value . "<br>";
            }
            //Q2
                $currentMonth = date('m');
                echo $moisFr[$currentMonth];

            //Q3
                $currentMonth = intval(date('m'));
                echo $moisFr[$currentMonth],"<br>";

            //Q4
            //Lorsque la valeur de Juillet est modifiée dans le tableau en 13=>'Juillet', si vous utilisez la boucle for pour afficher le tableau, vous remarquerez que le mois Juillet ne sera plus affiché car il y a maintenant une lacune dans les indices du tableau.
            //Ce code vérifie si la valeur associée à l'indice actuel n'est pas nulle avant de l'afficher, ce qui vous permet de traiter les lacunes dans les indices du tableau.
                for ($i = 1; $i <= count($moisFr); $i++) {
                    if ($moisFr[$i] !== null) {
                        echo $i . " – " . $moisFr[$i] . "<br>";
                    }
                }
            
            //solution pour afficher le nouveau tableau 

            $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            foreach ($array as $element) {
                  echo $element . " ";}
            sort($array);
            $array = array_unique($array);

            ?>
    </body>