<?php
    //    Dada a hora, calcular quantos minutos se passaram desde o início do dia.
    echo "Digite o horário atual\n";
    echo "Horas: ";
    $horas = readline();
    echo "Minutos: ";
    $minutos = readline();

    $totalMinutos = ($horas * 60) + $minutos;

    echo "Já se passaram $totalMinutos minutos desde o inicio do dia. ";



?> 
