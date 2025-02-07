<?php 
    //Escreva um programa que declare um array. O array deve ser preenchido automaticamente com números múltiplos de 5 até possuir 10 elementos. Depois disso imprima cada valor.
    $vetor = array();
    $contador = 0;
    while(count($vetor) < 10){
        if($contador % 5 == 0){
            $vetor[] = $contador;
        }

        $contador++;
    }

    foreach($vetor as $numero){
        echo "Numero: $numero\n";
    }


?>