<?php
    //Ler um vetor de 10 posições (aceitar somente números positivos). Escrever a seguir o valor do maior elemento do vetor e a respectiva posição que ele ocupa no vetor.
    $vetor = array();
    $maior = 0;
    while(true){

        if(count($vetor) == 10){
            break;
        }


        $leitura = readline("Digite um número: ");
        if ($leitura > 0){
            if(count($vetor) == 0){
                $vetor[] = $leitura;
                $maior = $leitura;
                $posicao = count($vetor) - 1;
            } else{
                if($leitura > $maior){
                    $vetor[] = $leitura;
                    $maior = $leitura;
                    $posicao = count($vetor) - 1;

                }
            }
        } else{
            echo "Valor INVÁLIDO!\n";
        }

    }


    echo "O maior número digitado foi: $maior\nSua posição no vetor: $posicao\n"


?>