<?php
    //Ler um vetor A de 10 números. Após, ler mais um número e guardar em uma variável B. Armazenar em um vetor C o resultado de cada elemento de A multiplicado pelo valor B. Logo após, imprimir o vetor C.


    for($i = 1; $i <= 11; $i++){
        if($i == 11){
            $variavelB = readline("Digite um número pra variavel B: ");
        } else{
            $vetorA[] = readline("Digite um número pro vetor A: ");
        }
    }
    
    for($i = 0; $i < 10; $i++){
        $vetorC[] = $vetorA[$i] * $variavelB;
    }

    for($i = 0; $i < 10; $i++){
        echo "$vetorC[$i]\n";
        
    }







?>