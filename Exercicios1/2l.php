<?php
    $numero = readline("Digite um número: ");
    $invertido = strrev($numero); 

    
    $soma = $numero + $invertido;
    $somaString = strval($soma);
    $resultado = 0;
    for ($i = 0; $i < strlen($somaString); $i++) {
        $resultado += $somaString[$i] * ($i + 1);
    }
    
    $digitoVerificador = substr($resultado, -1);

    echo "Digito verificador: " . $digitoVerificador . "\n";

?>