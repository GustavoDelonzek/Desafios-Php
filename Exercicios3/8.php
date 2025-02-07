<?php
    //Uma loja está levantando o valor total de todas as mercadorias em estoque. Escreva um algoritmo que permita a entrada das seguintes informações: o número total de mercadorias no estoque; o valor de cada mercadoria. Ao final imprimir o valor total em estoque e a média de valor das mercadoria
    $estoqueTotal = readline("Número total de mercadoria no estoque: ");
    $valores = array();
    for($i = 0; $i < $estoqueTotal; $i++){
        $nomeProduto = readline("Nome da mercadoria: ");
        $valorProduto = readline("Valor da mercadoria: ");
        $valores[$nomeProduto] = $valorProduto;

    }

    $valorTotal = array_sum($valores);
    $media = $valorTotal / $estoqueTotal;
    echo "------------------------\nEm estoque: $estoqueTotal un\nValor em estoque: R$" . number_format($valorTotal, 2) . "\nMédia: " . number_format($media, 2) ."\n------------------------\n";

?>