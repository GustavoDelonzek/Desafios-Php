<?php
    //Calcular a área de um triângulo (dadas a base e a altura).

    echo "------CALCULADORA TRIANGULO----------\n";
    echo "Em cm:\n";
    echo "Base: ";
    $base = readline();
    echo "Altura: ";
    $altura = readline();

    $area = $base * $altura / 2;

    echo "A área do triângulo é: " . number_format($area, 2) . "cm²";

?>