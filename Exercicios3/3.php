<?php
    //Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, a média e a quantidade de valores lidos. O programa deve ler os valores enquanto o usuário estiver fornecendo valores diferentes de zero. 


    $leitura = readline("Digite um número: ");

    while($leitura != 0){
        $numeros[] = $leitura;
        $leitura = readline("Digite um número: ");
    }

    echo "A soma dos " . count($numeros) . " números é " . array_sum($numeros) . ". E a media desses numeros é " . number_format(array_sum($numeros) / count($numeros) , 2) . "\n";



?>