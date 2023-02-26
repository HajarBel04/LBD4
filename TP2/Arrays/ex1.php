<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php [1, 2, 2, 3, 3, 3, 4, 5, 5];
    function afficher($array){
        foreach($array as $item){
            echo $item , " ";
        }
    }
    echo "1-Afficher ";
    echo "<br>";
    afficher($array);
    sort($aray);
    echo "<br>";
    echo "2-Sort ";
    echo "<br>";
    afficher($array);
    echo "<br>";
    function occurrences($array){
        $new_array = [];
        $final_array = [];
        echo "<br>";
        foreach($array as $item){
            $new_array[$item] =  array_count_values($array)[$item];         
        }
        foreach($new_array as $key => $value){
            array_push($final_array, $key);
        }
        return $final_array;
    }
    echo "3-Doublons ";
   afficher(occurences($array)) ;

    ?>
    
</body>
</html>