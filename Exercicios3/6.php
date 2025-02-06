<?php
    //Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada nota. Após o cálculo da nota de um aluno, a mensagem 'NOVO CÁLCULO (S/N)?' deverá aparecer. Se for respondido 'S' deve ser executado um novo cálculo, caso contrário deverá encerrar o algoritmo.
    $calculo = "S";

    while ($calculo == "S"){
        $primeiraNota = readline("Digite a primeira nota:");
        while(true){
            if($primeiraNota > 10 || $primeiraNota < 0){
                echo "----Inválido TENTE NOVAMENTE!----\n";
                $primeiraNota = readline("Digite a primeira nota:");
    
            } else{
                break;
            }
        }

        $segundaNota = readline("Digite a segunda nota:");
        while(true){
            if($segundaNota > 10 || $segundaNota < 0){

                echo "----Inválido TENTE NOVAMENTE!----\n";
                $segundaNota = readline("Digite a segunda nota:");
    
            } else{
                break;
            }
        }
        echo "A média das notas é ". number_format(($primeiraNota + $segundaNota )/2, 2) . "\n";
        $calculo = readline("NOVO CALCULO (S/N)? ");
      
    }

    echo "Falhou";

?>