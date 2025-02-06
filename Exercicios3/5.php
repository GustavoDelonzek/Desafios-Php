<?php
    //Elaborar um programa que leia valores inteiros até que o valor zero seja informado. No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.
    $leitura = readline("Digite um número: ");
    $maior = $leitura;
    $menor = $leitura;

    while($leitura != 0){

        if($leitura > $maior){
            $maior = $leitura;
        }

        if($leitura < $menor){
            $menor = $leitura;
        }
        $leitura = readline("Digite um número: ");
    }

    echo "O maior numero digitado é o $maior\nO menor número digitado é $menor\n";



?>