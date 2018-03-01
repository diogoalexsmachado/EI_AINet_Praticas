<?php

function times_table_view(){
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
}

?>