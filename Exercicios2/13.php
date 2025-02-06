<?php
    //Ler a hora de início e a hora de fim de um jogo de Xadrez (considere apenas horas inteiras, sem os minutos) e calcule a duração do jogo em horas, sabendo-se que o tempo máximo de duração do jogo é de 24 horas e que o jogo pode iniciar em um dia e terminar no dia seguinte.
    $inicio = readline("Hora de inicio: ");
    $fim = readline("Hora do fim: ");

    if ($fim < $inicio){
        $horas = $fim + (24 - $inicio);
        echo "O jogo durou $horas horas";
    } else if($fim == $inicio){
        echo "O jogo durou 24 horas";
    } else{
        $horas = $fim - $inicio;
        echo "O jogo durou $horas horas";
    }

    echo "\n";



?>