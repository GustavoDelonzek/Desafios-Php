<?php
    //Identifique, entre três jogadores, os ganhadores do “dois-ou-um”. O “dois-ou-um” é disputado na primeira rodada. O vencedor é quem, na segunda rodada, vence o “par-ou-ímpar”.
    echo "Você é o jogador UM!!\n";
    echo "------PRIMEIRA RODADA----------\n";
    $jogadorUm = readline("2 ou 1: ");
    $jogadorDois = rand(1, 2);
    $jogadorTres = rand(1, 2);

    echo "---------------------------\nJogador um: $jogadorUm\nJogador dois: $jogadorDois\nJogador tres: $jogadorTres\n---------------------------\n";


    if ( $jogadorUm == $jogadorDois && $jogadorUm == $jogadorTres){
        echo "Primeira rodada empatada!\nRecomece!\n";

    } else if($jogadorUm  == $jogadorDois){
        echo "Jogador um e dois passam pra proxima rodada!\n";
        $escolha = readline("Jogador Um, [1] ímpar ou [2] par:");
        $jogadorUm = readline("Sua mão, 0 a 10: ");
        $jogadorDois = rand(0,10);
        echo "\n------------------------\n Sua mão: $jogadorUm\n Jogador dois: $jogadorDois\n------------------------\n";

        $resultado = ($jogadorUm + $jogadorDois) % 2;
        if ($escolha == 1) {     
            if ($resultado == 1){
                echo "Você VENCEU!";
            } else{
                echo "Jogador numero DOIS VENCEU!";
            }
        } else if ($escolha == 2){
            if ($resultado == 0){
                echo "Você VENCEU!";
            } else{
                echo "Jogador numero DOIS VENCEU!";
            }
        }


    }else if($jogadorUm  == $jogadorTres){
        echo "Jogador um e tres passam pra proxima rodada!";
        $escolha = readline("Jogador Um, [1] ímpar ou [2] par:");
        $jogadorUm = readline("Sua mão, 0 a 10: ");
        $jogadorTres = rand(0,10);
        echo "\n------------------------\n Sua mão: $jogadorUm\n Jogador tres: $jogadorTres\n------------------------\n";

        $resultado = ($jogadorUm + $jogadorTres) % 2;
        if ($escolha == 1) {     
            if ($resultado == 1){
                echo "Você VENCEU!";
            } else{
                echo "Jogador numero Tres VENCEU!";
            }
        } else if ($escolha == 2){
            if ($resultado == 0){
                echo "Você VENCEU!";
            } else{
                echo "Jogador numero Tres VENCEU!";
            }
        }


    }else if($jogadorTres  == $jogadorDois){
        echo "Jogador tres e dois passam pra proxima rodada!";
        $escolha = rand(1,2);
        $jogadorDois = rand(0,10);
        $jogadorTres = rand(0,10);
        

        $resultado = ($jogadorUm + $jogadorTres) % 2;
        if ($escolha == 1) {     
            echo "Jogador número Três escolheu Ímpar!\n";
            echo "\n------------------------\n Jogador Dois: $jogadorDois\n Jogador tres: $jogadorTres\n------------------------\n";
            if ($resultado == 1){
                echo "Jogador numero TRES VENCEU!";
            } else{
                echo "Jogador numero DOIS VENCEU!";
            }
        } else if ($escolha == 2){
            echo "Jogador número Três escolheu Par!\n";
            echo "\n------------------------\n Jogador Dois: $jogadorDois\n Jogador tres: $jogadorTres\n------------------------\n";
            if ($resultado == 0){
                echo "Jogador numero TRES VENCEU!";
            } else{
                echo "Jogador numero DOIS VENCEU!";
            }
        }
        

    }

    echo "\n";

?>