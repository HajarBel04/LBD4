<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $ages = ["hajar"=> 18 ,"maha"=> 16,"wiam"=> 20,"oumaima"=> 21];
            foreach($ages as $key => $value){
                echo $key, " a ",$value," ans <br>";
            }
            foreach($ages as $key => $value){
                echo $key, " a ",$value," ans <br>";
            }
        
            ?> 
            <table>
                <th>
            names
        </th>
        <th>ages</th>
                <?php
                foreach($ages as $key => $value){
                    echo "<tr> 
                    <td> $key </td>
                    <td> $value </td>
                    </tr>";
                }
                ?>
            </table>
        </body>
        <style>
            table,td,th {
                border : 1px solid black;
        
            }
            th,td{
                padding:5px;
                text-align:center;
            }
        </style>
        </html>