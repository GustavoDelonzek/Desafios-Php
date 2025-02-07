<?php 
    //Escreva um algoritmo que imprima a tabuada (de 1 a 10) para os números de 1 a 10.
    for($i = 1; $i<= 10; $i++){
        echo "-----------------------\n";
        echo "TABUADA DO $i\n-----------------------\n";
        for($j = 1; $j <=10; $j++){
            echo "$i x $j = " . $i*$j . "\n";
        }
        echo "-----------------------\n\n\n";

    }




?>