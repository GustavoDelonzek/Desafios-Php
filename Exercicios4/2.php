<?php
    //Entre com 10 números e armazene em um vetor. Ao final o programa deverá mostrar:  Quantos negativos foram digitados; Quantos positivos foram digitados; Quantos pares e ímpares. 
    $negativos = 0;
    $positivos = 0; 
    $par = 0;
    $impar =0;

    for($i = 0; $i < 10; $i++){
        $leitura = readline("Digite um numero: ");
        $vetor[] = $leitura;
        if($leitura < 0){
            $negativos++;
        } else{
            $positivos++;
        }

        if($leitura % 2 == 0){
            $par++;
        } else{
            $impar++;
        }
    }


    echo "----------------------\nForam digitados:\nNegativos: $negativos\nPositivos: $positivos\nPares: $par\nÍmpares: $impar\n-------------------------\n"




?>