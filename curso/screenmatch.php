<?php
    echo "Bem vindo ao Screen Match\n";

    function exibeMensagemLancamento(int $anoLancamento): void{
        if ($anoLancamento > 2024){
            echo "Lançamento!";
        }
        elseif ($anoLancamento >= 2020 && $anoLancamento<=2024) {
            echo "Filme novo!";
        }
        else {
            echo "Um ótimo filme!";
        }
    }

    function includioNoPlano(bool $planoPrime, int $anoLancamento): bool{
        if ($planoPrime || $anoLancamento < 2025){
            return true;
        }
        else{
            return false;
        }
    }

    $nomeFilme = "Top Gun - Maverick";
    $anoLancamento = 2022;
    $quantidadeNotas = $argc-1;
    $notas = [];
    for ($i = 0; $i<$quantidadeNotas; $i++){
        $notas[] = (float) $argv[$i+1];
    }


    $notaFilme = array_sum($notas) / $quantidadeNotas;
    $planoPrime = true;

    $incluidoNoPlano = includioNoPlano($planoPrime, $anoLancamento);

    echo "Nome do Filme: $nomeFilme\nAno de Lançamento: $anoLancamento\nNota: $notaFilme\n";

    exibeMensagemLancamento($anoLancamento);

    $genero = match ($nomeFilme) {
        "Top Gun - Maverick" => "Ação",
        "It - A Coisa" => "Terror",
        default => "Desconhecido",
    };

    echo "\nGênero: $genero";