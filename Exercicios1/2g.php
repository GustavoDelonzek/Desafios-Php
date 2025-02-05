<?php
    //Calcular a área de um losango (dadas as diagonais maior e menor).
    echo "-----Calculando área de um losango-----\n";
    echo "Diagonal maior: ";
    $diagonalMaior = readline();
    echo "Diagonal menor: ";
    $diagonalMenor = readline();

    $area = $diagonalMaior * $diagonalMenor / 2;

    echo "O valor da área é " . number_format($area, 2) . 'cm²';

?>