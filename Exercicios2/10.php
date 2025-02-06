<?php
    //Um comerciante usa margem de lucro de 45% se o valor de compra do produto for menor que R$20,00 e 30% nos demais casos. Dado o valor do produto, calcule o preço de venda.
    $precoProduto = readline("Digite o preço do seu produto: ");

    if ($precoProduto < 0){
        echo "Valor inválido";
    } else if ($precoProduto < 20){
        echo "O seu preço de venda é: R$". number_format($precoProduto + $precoProduto * 0.45, 2);
    } else{
        echo "O seu preço de venda é: R$". number_format($precoProduto + $precoProduto * 0.30, 2);

    }
    echo "\n";



?>