<?php
    $nome = $argv[1] ?? "Não informado";

    $nota = $argv[2];
    $nota += $argv[3];
    $nota += $argv[4];
    $nota = $nota/3;

    $cm = $argv[5]*100;

    $bissexto = ($arvg[6]%4 == 0) || ($arvg[6]%100 && $arvg[6]%400);

    $f = $argv[7]*1.8+32;

    echo "Nome: $nome\nMédia das 3 notas: $nota\nM->CM: $cm\nAno é bissexto: $bissexto\nFahrenheit: $f";