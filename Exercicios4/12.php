<?php
    //Faça um algoritmo para ler 10 números e armazenar em um vetor. Após isto, o algoritmo deve ordenar os números no vetor em ordem crescente. Escrever o vetor ordenado. (OBS: Não utilizar métodos de ordenação do PHP)

    

    for($i = 0; $i < 10; $i++){
        $numeros[] = readline("Digite um número: ");
    }


    for ($i = 1; $i < count($numeros); $i++){
        $referencia = $numeros[$i];
        $j = $i - 1;

        
        while(($j >= 0) && ($referencia < $numeros[$j])){
            $numeros[$j + 1] = $numeros[$j];
            $j--;
        }

        $numeros[$j+1] = $referencia;
    }

    foreach($numeros as $numero){
        echo "$numero - ";
    }






?>