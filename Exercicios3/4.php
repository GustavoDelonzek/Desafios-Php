<?php
    //Elaborar um programa que apresente o resultado da soma e a média dos valores pares situados na faixa numérica de 50 a 70.


    for($i = 50; $i <= 70; $i += 2){
        $pares[] = $i;
    }


    echo "A soma dos valores pares entre 50 e 70 é " . array_sum($pares) . ". E a media deles é " . number_format(array_sum($pares) / count($pares) , 2) . "\n";




?>