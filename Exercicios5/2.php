<?php
    /*
        Escreva uma função para cada questão a seguir:
    Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.
    Leia um número inteiro e retorne true se o número é par e false se o número é ímpar.
    Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles. Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
    Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números inteiros de b até c que sejam divisíveis por a. Exemplo: Para os valores de entrada 2 (para a), 5 (para b) e 10 (para c), a soma será 6+8+10= 24.
    Leia a altura e o sexo de uma pessoa e apresente o seu peso ideal. Para homens, calcular e apresentar o peso ideal usando a fórmula peso ideal = 72.7 * altura - 58 e, para mulheres, peso ideal = 62.1 * altura - 44.7.

    */
    function a($numero){
        if($numero % 4 == 0){
            return true;
        } else{
            return false;
        }
    }


    function b($numero){
        if($numero % 2 == 0){
            return true;
        } else{
            return false;
        }
    }

    function c($a, $b){
        if($a < $b){
            for($i = $a + 1; $i < $b; $i++){
                $numeros[] = $i;
            }

        } else{
            for($i = $b + 1; $i < $a; $i++){
                $numeros[] = $i;
            }
        }

        return array_sum($numeros);
    }


    function d($a, $b, $c){
        
    }


?>