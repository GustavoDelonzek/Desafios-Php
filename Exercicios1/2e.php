<?php
    //Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.
    echo "------CALCULADORA RETâNGULO----------\n";
    echo "Em cm:\n";
    echo "Base: ";
    $base = readline();
    echo "Altura: ";
    $altura = readline();

    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    $diagonal = sqrt(($base ** 2) + ($altura ** 2));

    echo "Área: $area";
    echo "\nPerímetro: $perimetro";
    echo "\nDiagonal: " . number_format($diagonal, 3);




?>