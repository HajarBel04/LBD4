<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <?php

    $students =array(
        "Et123" => array( "Nom" => "AB", "Prenom" => "AC", "note"=> array("module1" => 1, "module2" => 13,"module3"=>10)),
        "Et676" => array( "Nom" => "BC", "Prenom" => "BD", "note"=> array("module1" => 11, "module2" => 15,"module3"=>19)),
        "Et998" => array( "Nom" => "CD", "Prenom" => "CE", "note"=> array("module1" => 19, "module2" => 18,"module3"=>17)),
        "Et764" => array( "Nom" => "DE", "Prenom" => "DF", "note"=> array("module1" => 10, "module2" => 12,"module3"=>17.5)),
    
    
    );
    
    
    foreach ($students as $code => $infos){
        $max = $students[$code]["note"]["module1"];
        $maxMod = "module1";
        $min = $students[$code]["note"]["module1"];
        $minMod = "module1";
    
    
    
        
        foreach($infos as $what => $values){
            
            if ($what == "note"){
                foreach($infos[$what] as $modu => $grade){
                    if ( $max < $infos[$what][$modu]){
                        $max = $infos[$what][$modu];
                        $maxMod = $modu;
                    }
                    if ( $infos[$what][$modu] < $min ){
                        $min = $infos[$what][$modu];
                        $minMod = $modu;
                    }
                } 
                //foreach($infos[$what] as $modu => $grade){
                    
                //}   
            }  
           
        }
        echo $students[$code]["Nom"],':',$max,',',$maxMod,'<br/>';
        
        echo $students[$code]["Nom"],':',$min,',',$minMod,'<br/>';
        echo '<hr/>';
    
    }
    $max=0;
    $maxModules = [];
    $minModules = [];
    foreach ($students as $code => $array){
        foreach ($array as $what => $value){
            if($what == "note"){
                foreach($value as $module => $grade){
                    $max = $grade;
                    $min = $grade;
                    $mod = $module;
                    foreach($students as $code1 => $array1){
                        foreach($array1 as $what1 => $value1){
                            if ($what1 == "note"){
                                foreach($value1 as $module1 => $grade1){
                                    if ($module == $module1){
                                        if ( $max < $grade1){
                                            $max = $grade1;
                                        }
                                        if ($grade1 < $min){
                                            $min = $grade1;
                                        }
                                    }  
                                }  
                            }  
                        }    
                    }
                    $maxModules[$mod] = $max;
                    $minModules[$mod] = $min;
                } 
            }  
        }    
    }
    //var_dump($maxModules);
    foreach( $maxModules as $key => $value ){
        echo $key,',',$value,'<br/>';
    }
    echo '<hr>';
    foreach( $minModules as $key => $value ){
        echo $key,',',$value,'<br/>';
    }
    echo '<hr>';
    foreach($stu as $code => $infos){
        $sum = 0;
        
        foreach($infos as $what => $value){
            if ($what == "note"){
                foreach ($infos["note"] as $mod => $grade){
                    $sum = $sum+$grade;
                }
            }
    
            
    
        }
        echo $code,':',$stu[$code]["Nom"],': ',($sum/count($infos["note"])),',',(($sum/count($infos["note"])) >= 10) ? "The student passed the year": "Unfortunately, the student won't pass the year",'<br/>';
        
    }
            
                
                       
                 
             
                    
                     
               
                    
                
               
            
    
    
        
        
        
        
        
    
    
    
    
    ?>
    