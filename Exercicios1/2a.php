<?php
    //Dados dois números inteiros (dividendo e divisor), apresentar o quociente e o resto.
    echo "Digite dois numeros para realizar a divisão: \nPrimeiro:";
    $a = readline();
    echo "Segundo:";
    $b = readline();

    echo "Sua divisão é $a/$b\n";
    $quociente = $a/$b;
    echo "Quociente: $quociente \n";
    $resto = $a % $b;
    echo "Resto: $resto";
    
?>

