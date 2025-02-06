<?php
    //Dados quatro valores numéricos, identificar qual deles é o menor valor par.
    $pares = array();

     for ($i = 0; $i < 4; $i++){
        $numero = readline("Digite um número: ");
        if ($numero % 2 == 0){
            $pares[] = $numero;
        }
     }

     if($pares){
         rsort($pares);
         echo "O maior numero par digitado foi $pares[0]";
     } else {
        echo "Nenhum par foi digitado";
     }


     echo "\n";


?>