<?php

    for ($i = 0; $i < 100; $i++){
        echo $i+1 . " ";
        if ($i == 99){
            echo "\n";
        }
    }

    $peso = $argv[1];
    $altura = $argv[2];
    $aux = $peso/($altura**2);

    if ($aux <= 18.5) {
        $imc = "Abaixo do normal";
    } elseif ($aux >= 18.6 && $aux < 25) {
        $imc = "Normal";
    } elseif ($aux >= 25 && $aux < 30) {
        $imc = "Sobrepeso";
    } elseif ($aux >= 30 && $aux < 35) {
        $imc = "Obesidade I";
    } elseif ($aux >= 35 && $aux < 40) {
        $imc = "Obesidade II";
    } elseif ($aux >= 40) {
        $imc = "Obesidade III";
    } else {
        $imc = "Dado Inválido";
    }
    

    echo $imc . "\n";

    $saudacao = $argv[3];

    if ($saudacao >= 5 && $saudacao <12){
        echo "Bom Dia!";
    }
    elseif ($saudacao >=12 && $saudacao <18){
        echo "Boa Tarde!";
    }
    else{
        echo "Boa Noite!";
    }