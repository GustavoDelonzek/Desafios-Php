<?php
    //Ler o salário fixo e o valor das vendas efetuadas pelo vendedor de uma empresa. Sabendo-se que ele recebe uma comissão de 3% sobre o total das vendas até R$1.500,00 mais 5% sobre o que ultrapassar este valor, calcular e escrever o seu salário total.
    $salario = readline("Qual seu salário: R$");
    $valorVendas = readline("Total de vendas feitas: R$");

    if ($valorVendas <= 1500){
        $salarioTotal = $salario + ($valorVendas * 0.03);
    } else {
        
        $salarioTotal = $salario + ( 1500 * 0.03) + (($valorVendas - 1500) * 0.05);
    }

    echo "O salário total é R$" . number_format($salarioTotal,2) . "\n";


?>