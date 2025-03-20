<?php
    echo "Bem vindo ao Screen Match\n";

    $nomeFilme = "Top Gun - Maverick";
    $anoLancamento = 2022;
    $quantidadeNotas = $argc-1;
    $notas = [];
    for ($i = 0; $i<$quantidadeNotas; $i++){
        $notas[] = (float) $argv[$i+1];
    }


    $notaFilme = array_sum($notas) / $quantidadeNotas;
    $planoPrime = true;

    $incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

    echo "Nome do Filme: $nomeFilme\nAno de Lançamento: $anoLancamento\nNota: $notaFilme\n";

    if ($anoLancamento > 2024){
        echo "$nomeFilme é um Lançamento!";
    }
    elseif ($anoLancamento >= 2020 && $anoLancamento<=2024) {
        echo "$nomeFilme é um filme novo!";
    }
    else {
        echo "$nomeFilme é um ótimo filme!";
    }

    $genero = match ($nomeFilme) {
        "Top Gun - Maverick" => "Ação",
        "It - A Coisa" => "Terror",
        default => "Desconhecido",
    };

    echo "\nGênero: $genero";