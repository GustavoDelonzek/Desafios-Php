<?php
    //Faça um algoritmo que leia o ano de nascimento de uma pessoa, calcule e mostre sua idade, e também informe se ela já pode votar (16 anos ou mais) e tirar a Carteira de Habilitação (18 anos ou mais).
    $nascAno = readline("Digite o ano do seu nascimento: ");
    $idade = 2025 - $nascAno;

    echo "Sua idade é $idade anos. \n " ;

    if ($idade < 16) {
      echo "Você ainda nao pode votar e nem tirar sua carteira de habilitação!";
    } else if ($idade < 18) {
        echo "Você já pode votar! Porem nao pode tirar sua carteira ainda!";
    } else {
        echo "Você ja pode votar e dirigir!";
    }






?> 