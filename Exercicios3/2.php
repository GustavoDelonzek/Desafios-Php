<?php
    
    for($i = 0; $i< 10; $i++){
        $numeros[] = readline("Digite um numero: ");

    }

    $soma = array_sum($numeros);
    $media = $soma / 10;

    echo "A soma total dos numeros é $soma e a media é $media\n";




?>