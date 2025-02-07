<?php
    //Escreva um programa com quatro funções diferentes, cada uma recebe dois números inteiros e realiza uma operação matemática diferente (soma, subtração, multiplicação e divisão) e retorna o resultado. A escolha da função a ser executada é decidida por uma variável inteira que é preenchida no início do programa juntamente com as outras duas variáveis com os valores do cálculo. O resultado deve ser apresentado no final da execução. Quando a função de divisão é utilizada, ela deve retornar uma mensagem de erro se ocorrer divisão por zero.
    function soma($a, $b){
        return $a + $b;
    }

    function subtracao($a, $b){
        return $a - $b;
    }

    function multiplicacao($a, $b){
        return $a * $b;
    }

    function divisao($a, $b){
        if($b <= 0){
            echo "ERRO, DIVISÃO INVÁLIDA";
        } else{
            return $a / $b;

        }
    }

    echo "Testando as operações\nSoma: 3 + 3 = " . soma(3,3) . "\nSubtração: 3 - 3 = " . subtracao(3,3) . "\nMultiplicação: 3 x 3 = " . multiplicacao(3,3) . "\nDivisão: 3 / 3 = " . divisao(3,3) . "\n";

    



?>