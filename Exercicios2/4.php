<?php
    //Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). Escrever também a média calculada.
    $primeiraNota = readline("Digite a primeira nota do aluno: "); 
    $segundaNota = readline("Digite a segunda nota do aluno: ");

    $media = ($primeiraNota + $segundaNota)/2;

    if ($media >= 6){
        echo "Aluno APROVADO! Sua média foi ". number_format($media, 2);
    } else {
        echo "Aluno REPROVADO! Sua média foi " . number_format($media, 2);
    }



?>