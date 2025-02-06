<?php
   $valorEtiqueta = readline("Digite o preço do produto:");

   echo "----Condições de pagamento----\n[1] À vista em dinheiro com 10% de desconto.\n[2] À vista no cartão com 5% de desconto.\n[3] Em 2 vezes, preço normal da etiqueta.\n[4] Em 3 vezes, preço normal da etiqueta com juros de 10%.\n------------------------------\n";

   $pagamentoCodigo = readline("Digite o código da sua forma de pagamento: ");   

    switch($pagamentoCodigo):
        case 1:
            echo "O preço a ser pago é R$" . number_format($valorEtiqueta - $valorEtiqueta*0.1, 2);
            break;
        case 2:
            echo "O preço a ser pago é R$" . number_format($valorEtiqueta - $valorEtiqueta*0.05, 2);
            break;
        case 3:
            echo "O preço a ser pago é R$$valorEtiqueta. Em parcelas de R$" . number_format($valorEtiqueta/2 , 2);
            break;
        case 4:
            echo "O preço a ser pago é R$". number_format($valorEtiqueta + $valorEtiqueta * 0.1, 2) . " Em parcelas de R$" . number_format($valorEtiqueta/3 , 2);
            break;
        default: 
            echo "O número digitado nao corresponde a um código!!!";
            break;
    endswitch;

    echo "\n";



?>