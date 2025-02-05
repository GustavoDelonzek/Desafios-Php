<?php 
    //Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal, além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor. Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor, o valor total das vendas, o salário fixo mensal e o valor da comissão por carro vendido. O algoritmo deve calcular e exibir o salário final do vendedor, que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas.
    echo "---------------------";
    echo "\nValor do salário fixo: ";
    $salarioFixo = readline();
    echo "\nComissão por venda: ";
    $valorComissaoVenda = readline();
    echo "\nNúmero de vendas: ";
    $numeroVendas = readline();
    echo "\nValor total das vendas: ";
    $totalVendas = readline();

    $totalComissao = $valorComissaoVenda * $numeroVendas;
    $valorTotalVendas = $totalVendas * 0.05;
    $salarioTotal = $totalComissao + $salarioFixo + $valorTotalVendas;

    echo "O salário total R$" . number_format($salarioTotal, 2);

?>