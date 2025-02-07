<?php
    //Escreva um algoritmo que permita a leitura das notas de uma turma de 20 alunos. Calcular a média da turma e contar quantos alunos obtiveram nota acima desta média calculada. Escrever a média da turma e o resultado da contagem.

    for($i = 0; $i < 20; $i++){
        $notas[] = readline("Nota aluno $i:");
    }

    $mediaTurma = array_sum($notas)/ 20;
    $contadorAcima = 0;
    for($i = 0; $i < 20; $i++){
        if($notas[$i] > $mediaTurma){
            $contadorAcima++;
        }
    }

    echo "---------------------\nMédia: " . number_format($mediaTurma, 2) . "\nAlunos acima da média: $contadorAcima\n";




?>