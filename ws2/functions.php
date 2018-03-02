<?php
function times_table_view(){
    $isEqual = false;
    echo "<table><tr><td class='first'>*</td>";
    for($b=1; $b<11;$b++){ //Draw first line of numbers
        echo "<td class='first'>".$b."</td>";
    }
    echo "</tr>";
    for($i = 1; $i < 11; $i++) {
        echo "<tr><td class='first'>".$i."</td>"; //Draw the number of first column of numbers
        for($a = 1; $a < 11; $a++) {
            if($a==$i){
                echo "<td class='equal'>".$a*$i."</td>"; //Return multiplication with stronger color
            }else{
                echo "<td>".$a*$i."</td>";//Return multiplication
            }
        }
    echo "</tr>";
    }
    echo "</table>"; //Close table
}


function prime_numbers($n){
    $array = [];
    for($i=0;$i<=$n;$i++){
        if(!($i%2==0 || $i%3==0)){
        array_push($array,$i);
        }elseif($i==2){
            array_push($array,$i);
        }
    }
    return $array;
}

function prime_numbers_view($n){
    $array=prime_numbers($n);
    foreach($array as $key => $prime){
        echo $prime;
        if (next($array)==true) {
            echo ", ";
        }
    }
}

function mistery_sentence(){
    include "sentences.php";
    $pos_nouns = rand(1,count($nouns))-1;
    $pos_verbs = rand(1,count($verbs))-1;
    $pos_objects = rand(1,count($objects))-1;

    echo ucfirst($nouns[$pos_nouns]." ".$verbs[$pos_verbs]." ".$objects[$pos_objects]);
} 

?>