<?php
    $texto1 = "Primeira linha\n";

    file_put_contents( __DIR__ . "/teste.txt", $texto1);

    $leitura = file_get_contents(__DIR__ . "/teste.txt");

    echo $leitura . "\n";

    $texto2 = "PHP é Top\n";

    $arquivo = fopen(__DIR__ . "/teste.txt", "a");

    fwrite( $arquivo, $texto2);

    fclose($arquivo);

    $leitura = file_get_contents(__DIR__ . "/teste.txt");

    echo $leitura . "\n";

    $objetoString = [
        "nome"=>"Vinicius",
        "anoNascimento"=>1997,
        "profissao"=>"Dev"
    ];

    $stringJson = json_encode($objetoString);

    file_put_contents(__DIR__ . "/objeto.json", $stringJson);


