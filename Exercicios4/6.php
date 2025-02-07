<?php 

    //Crie dois vetores, cada um com capacidade para armazenar 10 números. Solicite ao usuário que entre com os valores nestes dois vetores. O programa deverá mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições. Ex. vetor_a[0] * vetor_b[0] e assim por diante.
    for($i = 0; $i < 10; $i++){
        $vetorA[] = readline("Digite um numero pro vetor A: ");
    }

    for($i = 0; $i < 10; $i++){
        $vetorB[] = readline("Digite um numero pro vetor B: ");
    }

    for($i = 0; $i < 10; $i++){
        echo "$vetorA[$i] x $vetorB[$i] = " . $vetorA[$i] * $vetorB[$i]. "\n";
    }



?>