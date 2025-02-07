<?php
    //Escreva um algoritmo que permita a leitura dos nomes de 10 pessoas e armazena os nomes lidos em um vetor. Após isto, o algoritmo deve permitir a leitura de mais 1 nome qualquer de pessoa e depois escrever a mensagem ACHEI, se o nome estiver entre os 10 nomes lidos anteriormente (guardados no vetor), ou NÃO ACHEI caso contrário.

    for($i = 0; $i < 10; $i++){
        $nomes[] = readline("Digite um nome: ");
    }

    $procura = readline("Digite um nome para procurar: ");

    if(in_array($procura, $nomes)){
        echo "ACHEI";
    } else{
        echo "NÃO ACHEI";
    }

    echo "\n";


?>