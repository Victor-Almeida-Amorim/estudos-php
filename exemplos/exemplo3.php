<?php
    $lista = [];
    $tamanho = $argc;

    for($i = 0; $i < $tamanho; $i++){
        $lista[] = (int) $argv[$i];
        echo "Lista[$i]: $lista[$i]\n";
    }

    echo "\n";

    for($i = 0; $i<count($lista); $i++){
        $aux = $lista[$i];
        for($j = 0; $j<count($lista); $j++){
            if($i<>$j){
                if($aux == $lista[$j]){
                    $lista[$j] = null;
                }
            }
        }
        echo "Lista[$i]: $lista[$i]\n";
    }

    $notas = [10, 2, 4, 3, 5, 8, 6, 9, 7, 1];

    $cont = 0;
    foreach($notas as $nota){
        if ($nota>=6){
            echo "Notas[$cont] aprovado com: $nota\n";
        }
        $cont++;
    }

    $conta = [
        "nome" => "Victor",
        "tipo" => "Corrente",
        "saldo" => 1200,
    ];

    var_dump($conta);
