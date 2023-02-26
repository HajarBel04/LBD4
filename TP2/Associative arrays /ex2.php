<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $table=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.org","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.asp","CSS"=>"https://www.w3schools.com/css/default.asp");
            $array = array_rand($table);
            echo "In order to learn $array ==> Visit this website :  ",$table[$array];
            ?>
        </body>