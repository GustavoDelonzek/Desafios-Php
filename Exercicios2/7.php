<?php
    $idade = readline("Digite a idade do nadador: ");

    if ($idade < 5){
        echo "Seu nadador não se enquadra em nenhuma categoria!";
    } else if ($idade <= 7){
        echo "A categoria do seu nadador é INFANTIL A";
    } else if ($idade <= 10){
        echo "A categoria do seu nadador é INFANTIL B";
    } else if ($idade <= 13){
        echo "A categoria do seu nadador é JUVENIL A";
    } else if ($idade <= 17){
        echo "A categoria do seu nadador é JUVENIL B";
    } else {
        echo "A categoria do seu nadador é SÊNIOR";

    }

    echo "\n";


?>