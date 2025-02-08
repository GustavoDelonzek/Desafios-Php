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
            echo "ERRO, DIVISÃO INVÁLIDA, divisor deve ser maior que 0!\n";
        } else{
            return $a / $b;

        }
    }


    echo "Escolha a operação\n[1]Soma\n[2]Subtração\n[3]Divisão\n[4]Multiplcação\n";
    $escolha = readline("Escolha: ");
    $primeiroValor = readline("Primeiro valor: ");
    $segundoValor = readline("Segundo valor: ");
    
    switch ($escolha):
        case 1:
            echo "O valor da soma é: " . soma($primeiroValor, $segundoValor);
            break;
        case 2:
            echo "O valor da subtração é: " . subtracao($primeiroValor, $segundoValor);
            break;
        case 3: 
            if($segundoValor > 0){
                echo "O valor da divisao é: " . divisao($primeiroValor, $segundoValor);
                break;
            } else{
                divisao($primeiroValor, $segundoValor);
                break;
            }
           
        case 4: 
            echo "O valor da multiplicação é: " . multiplicacao($primeiroValor, $segundoValor);
            break;
        default:
            echo "Opção inválida!!!! Programa encerrado";
            break;
        endswitch;


?>