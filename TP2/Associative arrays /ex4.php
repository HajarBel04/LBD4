<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <table>
            <?php 
            echo "<th> </th>";
            for ($i = 2 ; $i<=10 ; $i++){
                echo "<th style='font-weight : 600;'> $i </th>";
            }
            for ($i =2 ; $i<= 10;$i++){
                
                echo "<tr>";
                echo "<td> $i</td>";
                for ($j = 2 ; $j <= 10 ; $j++){
                    echo "<td>",$i*$j,"</td>";
                }
                echo "</tr>";
            }
            ?>
            </table>
        
        </body>
        <style>
            table , th , td {
                border:1px solid black;
            }
            th,td{
                padding:8px;
                text-align :center;
            }
        </style>
        </html>