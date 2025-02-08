<?php
/*
    Escreva uma função para cada questão a seguir:
Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.
Leia um número inteiro e retorne true se o número é par e false se o número é ímpar.
Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles. Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números inteiros de b até c que sejam divisíveis por a. Exemplo: Para os valores de entrada 2 (para a), 5 (para b) e 10 (para c), a soma será 6+8+10= 24.
Leia a altura e o sexo de uma pessoa e apresente o seu peso ideal. Para homens, calcular e apresentar o peso ideal usando a fórmula peso ideal = 72.7 * altura - 58 e, para mulheres, peso ideal = 62.1 * altura - 44.7.

*/
function a($numero)
{
    if ($numero % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

echo "-------------------------------------\nTESTE FUNÇÃO A\n-------------------------------------\n";
$numeroA = readline("Digite um número: ");
if(a($numeroA)){
    
    echo "É multiplo de 4";
} else{
    echo "Não é multiplo de 4 ";
    
}

echo "\n-------------------------------------\n";

function b($numero)
{
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}


echo "-------------------------------------\nTESTE FUNÇÃO B\n-------------------------------------\n";
$numero = readline("Digite um número: ");
if(b($numero)){
    
    echo "É PAR ";
} else{
    echo "É ÍMPAR ";
    
}

echo "\n-------------------------------------\n";

function c($a, $b)
{
    if ($a < $b) {
        for ($i = $a + 1; $i < $b; $i++) {
            $numeros[] = $i;
        }

    } else {
        for ($i = $b + 1; $i < $a; $i++) {
            $numeros[] = $i;
        }
    }

    return array_sum($numeros);
}


echo "-------------------------------------\nTESTE FUNÇÃO C\n-------------------------------------\n";
$escolhaA = readline("Digite um número: ");
$escolhaB = readline("Digite um numero: ");
echo "Resultado: " . c($escolhaA, $escolhaB);

echo "\n-------------------------------------\n";




function d($a, $b, $c)
{
    if ($c < $b) {
        for ($i = $c; $i <= $b; $i++) {
            if ($i % $a == 0) {

                $numeros[] = $i;
            }
        }

    } else {
        for ($i = $b; $i <= $c; $i++) {
            if ($i % $a == 0) {

                $numeros[] = $i;
            }
        }
    }

    return array_sum($numeros);

}

echo "-------------------------------------\nTESTE FUNÇÃO D\n-------------------------------------\n";
$escolhaPrimeiro = readline("Digite um número maior que 0: ");
$escolhaSegundo = readline("Digite um numero: ");
$escolhaTerceiro= readline("Digite um numero: ");
echo "Resultado: " . d($escolhaPrimeiro, $escolhaSegundo, $escolhaTerceiro);

echo "\n-------------------------------------\n";


function e($altura, $sexo)
{
    if($sexo == "M"){
        $pesoIdeal = 72.7 * $altura - 58;
    } else{
        $pesoIdeal =  62.1 * $altura - 44.7;
    }
    return $pesoIdeal;
}

echo "-------------------------------------\nTESTE FUNÇÃO E\n-------------------------------------\n";
$escolhaAlturaE = readline("Digite sua altura (Em metros, ex: 1.84): ");
$escolhaSexoE = readline("Digite seu sexo (M/F): ");

echo "Seu peso ideal com base em sua altura e sexo é: " . e($escolhaAlturaE, $escolhaSexoE) . "kg.";

?>