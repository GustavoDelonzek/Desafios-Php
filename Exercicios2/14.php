<?php
    //A jornada de trabalho semanal de um funcionário é de 40 horas. O funcionário que trabalhar mais de 40 horas receberá hora extra, cujo cálculo é o valor da hora regular com um acréscimo de 50%. Escreva um algoritmo que leia o número de horas trabalhadas em um mês, o salário por hora e escreva o salário total do funcionário, que deverá ser acrescido das horas extras, caso tenham sido trabalhadas (considere que o mês possua 4 semanas exatas). Além disso, se o funcionário  trabalhar menos do que 40 horas por semana, ele deverá receber um desconto de 5%.
    $numeroHoras = readline("Horas trabalhadas no mês: ");
    $salarioPorHora = readline("Sálario por hora R$:");
    $trabalhoSemanal = $numeroHoras/4;

    if ($trabalhoSemanal >= 40){
        $horasExtras = $trabalhoSemanal - 40;
        $salarioTotal = (40 * $salarioPorHora) + ($horasExtras * ($salarioPorHora + $salarioPorHora * 0.5));
    } else{
        
        $salarioTotal = ($salarioPorHora * $trabalhoSemanal);
        $salarioTotal -= $salarioTotal* 0.05; 
    }

    echo "O salario semanal é R$" . number_format($salarioTotal, 2) . "\n";

    echo "O salario total é R$" . number_format($salarioTotal * 4, 2) . "\n";



?>