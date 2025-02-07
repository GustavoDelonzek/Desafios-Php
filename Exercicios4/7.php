<?php
    //Crie um vetor que armazene o nome de todos os meses do ano. Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente. 
    $meses = [ "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro" , "dezembro"];


    $numero = readline("Digite um número de 1 a 12: ");
    if($numero <= 12 && $numero > 0){
        echo "O mês correspondente a este número é " . $meses[$numero -1] . "\n";

    } else{
        echo "Não existe mês correspondente\n";
    }


?>