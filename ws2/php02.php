<!doctype html>

<style>
table { border: 1px solid black; border-collapse: collapse; }
td { background-color:#F44336; width:35px; height:35px; color: white; text-align: center; border: 1px solid black;}
.equal { background-color:#820909; }
.first { background-color:#ba1616; }
</style>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: Times table</title>
    </head>

    <body>

        <?php
            $isEqual = false;
            echo "<table>";     
            echo "<tr>";

            echo "<td class='first'>"; 
            echo "*";
            echo "</td>";

            for($b=1; $b<11;$b++){
                echo "<td class='first'>"; 
                echo $b;
                echo "</td>";
            }

            echo "</tr>";
            for($i = 1; $i < 11; $i++) {
                echo "<tr>";
                
                echo "<td class='first'>"; 
                echo $i;
                echo "</td>";
                for($a = 1; $a < 11; $a++) {
                    if($a==$i){
                        echo "<td class='equal'>"; 
                        echo $a*$i;
                        echo "</td>";
                    }else{
                        echo "<td>"; 
                        echo $a*$i;
                        echo "</td>";
                    }

                }
            echo "</tr>";
            }
            
            echo "</table>";
        ?>

    </body>

</html>