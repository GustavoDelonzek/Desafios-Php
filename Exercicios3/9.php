<?php
    
    $valores = array();
    echo "Cadastre suas mercadorias: \n";
    while (true){
        $valorProduto = readline("Valor da mercadoria: ");
        $valores[] = $valorProduto;
        $escolha = readline("MAIS MERCADORIAS (S/N)?");
        if($escolha == "N"){
            break;
        }
    }

    $valorTotal = array_sum($valores);
    $media = $valorTotal / count($valores);
    echo "------------------------\nProdutos em estoque:". count($valores) ."un\nValor em estoque: R$" . number_format($valorTotal, 2) . "\nMédia: R$" . number_format($media, 2) ."\n------------------------\n";




?>