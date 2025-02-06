<?php
    //Desenvolva um algoritmo que, dado um número, verifique se ele está entre 30 e 90 ou é maior que 120 ou não se encaixa em nenhuma dessas condições.

    $numero = readline("Digite um número: ");


    if($numero >= 30 && $numero <= 90) {
      echo "O número está entre 30 e 90."  ;
    } else if ($numero > 120){
        echo "O número é maior que 120!";
    } else{
        echo "O número nao se enquadra em nenhuma das condições!!";
    }

    echo "\n";

?>