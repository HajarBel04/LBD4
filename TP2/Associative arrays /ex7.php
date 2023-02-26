<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
    $students = array(
        "Et123" => array( "Nom" => "AB", "Prenom" => "AC", "Moyenne"=>17),
        "Et676" => array( "Nom" => "BC", "Prenom" => "BD", "Moyenne"=>1),
        "Et998" => array( "Nom" => "CD", "Prenom" => "CE", "Moyenne"=>19),
        "Et764" => array( "Nom" => "DE", "Prenom" => "DF", "Moyenne"=>16.5),

    );
    foreach ($students as $code => $infos){
        echo $code,':<br/>';
        foreach($infos as $what => $values){
            echo $what,':',$values,'/<br/>';
        }
    }
    $max = $students["Et123"]["Moyenne"];

    $nom =  $students["Et123"]["Nom"];
    $prenom =  $students["Et123"]["Prenom"];

    foreach ($students as $code => $infos){
        
        foreach($infos as $what => $values){
            
            if ($what == "Moyenne"){
                if($max < $infos["Moyenne"]){
                    $max = $infos["Moyenne"];
                    $nom = $infos["Nom"];
                    $prenom =  $infos["Prenom"];
                }
            }  
        }
    }
    echo "Max is $max, Name: $nom, Prenom: $prenom <br/>";
    $min = $students["Et123"]["Moyenne"];

    $nom1=  $students["Et123"]["Nom"];
    $prenom2 =  $students["Et123"]["Prenom"];

    foreach ($stu as $code => $infos){
        
        foreach($infos as $what => $values){
            
            if ($what == "Moyenne"){
                if($infos["Moyenne"] < $min  && $infos["Moyenne"] >=10 ){
                    $min = $infos["Moyenne"];
                    $nom1 = $infos["Nom"];
                    $prenom1 =  $infos["Prenom"];
                }
            }  
        }
    }
    echo "Min is $min, Name: $nom1, Prenom: $prenom1 <br/>";
    echo "List of students who did't pass the year: <br/>";
    foreach ($students as $code => $infos){
        
        foreach($infos as $what => $values){
            
            if ($what == "Moyenne"){
                if($infos["Moyenne"] < 10){
                    echo 'Name:',$infos["Nom"].',Prenom: ', $infos["Prenom"],' failed with the grade: ',$infos["Moyenne"],'<br/>';
                    
                }
            }  
        }
    }

    ?>
    </body>
