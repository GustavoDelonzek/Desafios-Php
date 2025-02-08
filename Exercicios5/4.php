<?php
    //(Opcional) Escreva um programa de conversão de temperaturas. O usuário deverá digitar uma temperatura, sua unidade atual (C, F ou Kelvin) e a unidade nova desejada. O programa deverá então fazer a conversão. Crie três funções de conversões, uma para cada unidade de temperatura.

    function converteCelsius ($temperatura, $unidade){
        if($unidade == 1){
            return $temperatura * 1.8 + 32;
        } else{
            return $temperatura + 273.15 ;
        }
    }
    function converteFah ($temperatura, $unidade){
        if($unidade == 1){  
            return number_format(($temperatura - 32) * 5 / 9,2);
        } else{
            return  number_format(($temperatura - 32) /  1.8 + 273.15, 2);
        }
    }       

    function converteKelvin ($temperatura, $unidade){
        if($unidade == 1){
            return $temperatura - 273.15;
        } else{
            return (($temperatura - 273.15) * 1.8) + 32;
        }
    }


    echo "------CONVERSOR DE TEMPERATURA------\n";
    echo "Selecione a unidade atual da temperatura - [1]Celsius - [2]Fahrenheit - [3]Kelvin\n";
    $unidadeAtual = readline("Selecione: ");
    $temperatura = readline("Temperatura: ");
    switch ($unidadeAtual):
        case 1: 
            echo "------CONVERTENDO DE CELSIUS------\n";
            echo "Seleciona a unidade para converter - [1]Fahrenheit - [2]Kelvin\n";
            $novaTemperatura = readline("Selecione:");
            echo "------------------------\n$temperatura °C convertido fica ". converteCelsius($temperatura, $novaTemperatura);
            echo $novaTemperatura == 1 ? "°F" : "K";
            
            break;
        case 2:
            echo "------CONVERTENDO DE FAHRENHEIT------\n";
            echo "Seleciona a unidade para converter - [1]Celsius- [2]Kelvin\n";
            $novaTemperatura = readline("Selecione:");
            echo "------------------------\n$temperatura °F convertido fica ". converteFah($temperatura, $novaTemperatura);
            echo $novaTemperatura == 1 ? "°C" : "K";
            break;
        case 3:
            echo "------CONVERTENDO DE KELVIN------\n";
            echo "Seleciona a unidade para converter - [1]Celsius - [2]Fahrenheit\n";
            $novaTemperatura = readline("Selecione:");
            echo "------------------------\n$temperatura °K convertido fica ". converteKelvin($temperatura, $novaTemperatura);
            echo $novaTemperatura == 1 ? "°C" : "°F";
            break;
        default:
            echo "Seleção inválida. PROGRAMA ENCERRADO!\n";
    endswitch;


?>