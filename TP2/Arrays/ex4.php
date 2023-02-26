<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $tableau = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $taille = count($tableau);

        for ($i = 0, $j = $taille - 1; $i < $j; $i++, $j--) {
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $temp;
        }
        
        echo "Tableau d'entiers inversé : \n";
        print_r($tableau);
        
        echo "<br><br>";
        ?>
        </body>