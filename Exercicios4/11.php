<?php
    /* Faça um algoritmo para ler e armazenar em um vetor a temperatura média de 10 dias do ano. Calcular e escrever:
Menor temperatura do ano
Maior temperatura do ano
Temperatura média anual
 O número de dias no ano em que a temperatura foi inferior à média anual
*/
    for($i = 0; $i < 10; $i++){
        echo "Temperatura dia " . $i + 1 . "\n";
        $temperaturas[] = readline("Digite a temperatura média (°C):");
    }

    $mediaAnual = array_sum($temperaturas) / 10 ;
    $contadorAcima = 0;

    for($i = 0; $i < 10; $i++){
       if($temperaturas[$i] > $mediaAnual){
        $contadorAcima++;
       } 
    }




    echo "\nA maior temperatura do ano foi ". max($temperaturas) . "°C. \nA menor temperatura do ano foi ". min($temperaturas) . "°C.\nA média anual de temperatura foi $mediaAnual °C.\nNúmero de dias acima da média: $contadorAcima. \n\n"; 



?>