<?php
    //Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo, fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência. Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.
    echo "Valor atual do Salário Minimo: ";
    $salarioMinimo = readline();
    $precoQuilo = 1/700 * $salarioMinimo;

    echo "Quantidade de quilowatts gasto na residência: ";
    $quantQuilo = readline();

    echo "O valor de cada quilowatt atualmente é: R$" . number_format($precoQuilo, 2);
    $valorTotal = $precoQuilo * $quantQuilo;
    echo "\nO valor total a ser pago pela residencia é: R$" . number_format($valorTotal, 2);
    echo "\nO valor descontado é: R$" . number_format($valorTotal - ($valorTotal * 0.1), 2);

    


?>