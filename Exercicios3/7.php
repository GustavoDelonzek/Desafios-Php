<?php
    $negativos = array();
    for($i = 0;$i <10 ; $i++){
        $leitura = readline("Digite um número: ");
        if ($leitura < 0){
            $negativos[] = $leitura;
        }


    }


    if (count($negativos) > 0){
        echo "De 10 valores, ". count($negativos) ." são NEGATIVOS!";

    } else{
        echo "Nenhum dos 10 valores são negativos";
    }

    echo "\n";



?>