<?php 
    //Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.
    $primeiroValor = readline("Digite um número: ");
    $segundoValor = readline("Digite outro número: ");

    if($primeiroValor > $segundoValor) {
        echo "O maior número entre os dois é: $primeiroValor" ;
    } else {
        echo "O maior número entre os dois é: $segundoValor";
    }
    echo "\n";


?>