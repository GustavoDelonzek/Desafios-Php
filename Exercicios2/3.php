<?php
    //As maçãs custam R$1,30 cada se forem compradas menos de uma dúzia, e R$1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra.


    $numeroMaca = readline("Digite o número de maçãs que deseja comprar: ");

    if ($numeroMaca >= 12){
        $valorCompra = $numeroMaca * 1;
    } else {
        $valorCompra = $numeroMaca * 1.30;
    }

    echo "Preço total: R$" . number_format($valorCompra, 2) . "\n";



?>