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