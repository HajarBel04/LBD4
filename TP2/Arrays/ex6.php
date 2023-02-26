<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
                $emails = array("utilisateur1@gmail.com", "utilisateur2@yahoo.com", "utilisateur3@hotmail.com","utilisateur4@gmail.com", "utilisateur5@yahoo.com", "utilisateur6@hotmail.com", "utilisateur7@gmail.com");
                $statistiques = array();
                    foreach ($emails as $email) {
                        $pieces = explode("@", $email);
                        $domaine = $pieces[1];
                        if (!isset($statistiques[$domaine])) {
                            $statistiques[$domaine] = 0;
                        }
                        $statistiques[$domaine]++;
                    }
        
                echo "Statistiques des occurrences de chaque fournisseur d'accès : \n";
                print_r($statistiques);
                
                echo"<br><br>";
        ?>
        </body>
        