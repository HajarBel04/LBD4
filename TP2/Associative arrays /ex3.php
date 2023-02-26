<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $etudiants = array(
            "Ahmed" => 14,
            "Joudia" => 19,
            "Samir" => 14,
            "Yasser" => 14.5,
            "Aya" => 12,
            "Ilham" => 16,
            "Yassine" => 17
        );
        
        foreach ($etudiants as $nom => $note) {
                echo "Nom : $nom, note = $note<br>";
        };
        ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($etudiants as $nom => $note) {
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>$note</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    $nom_max = "";
    $note_max = 0;
    
    foreach ($etudiants as $nom => $note) {
        if ($note > $note_max) {
            $nom_max = $nom;
            $note_max = $note;
        }
    }
    
    echo "L'étudiant ayant la note la plus élevée est : $nom_max<br>";
    echo "Note : $note_max";

    $nom_min = "";
    $note_min = 100;

    foreach ($etudiants as $nom => $note) {
        if ($note < $note_min) {
            $nom_min = $nom;
            $note_min = $note;
        }
    }

    echo "L'étudiant ayant la note la plus basse est : $nom_min<br>";
    echo "Note : $note_min";

    $somme = 0;
    $nombre_etudiants = count($etudiants);

    foreach ($etudiants as $nom => $note) {
        $somme += $note;
    }

    $moyenne = $somme / $nombre_etudiants;

    echo "La moyenne de la classe est : $moyenne";
    ?>
    </body>
    
