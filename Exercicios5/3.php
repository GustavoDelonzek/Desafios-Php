<?php
    //(Opcional) Escreva um programa que tenha uma função que receba um array de inteiros e encontre o maior número armazenado na array.
    function maiorDoArray($array){
        for($i = 0; $i < count($array) ; $i++){
            if($i == 0){
                $maior = $array[$i];

            } else if($array[$i] > $maior){
                $maior = $array[$i];
            }
        }

        return $maior;
    }

    echo "O maior numero deste array [41,3,82,12,28,31] é: " . maiorDoArray(array(41,3,82,12,28,31)) . " ";


?>