<?php
    //A partir de quatro números que serão fornecidos, calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.
    echo "Digite 4 números para obter sua media ponderada:\n";
    $a = readline();
    $b = readline();
    $c = readline();
    $d = readline();

    $media = ($a * 1 + $b * 2 + $c * 3 + $d * 4)/4;

    echo "A média ponderada é $media";



?>