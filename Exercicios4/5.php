<?php
    //Faça um algoritmo para ler 10 números e armazenar em um vetor. Após a leitura total dos 10 números, o algoritmo deve escrever esses 10 números lidos na ordem inversa.

    for($i = 0; $i < 10; $i++){
        $vetor[] = readline("Digite um numero: ");
    }


    for($i = 9; $i >= 0; $i--){
        echo "$vetor[$i]\n";
    }






?>