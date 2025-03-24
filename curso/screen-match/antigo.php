<?php
    require __DIR__ ."/src/funcoes.php";

    $filme = new Filme();

    $filme = criarFilme(
        "Top Gun - Maverick",
        2022,
        9.3,
        false,
        '',
    );

    $filme->genero = match ($filme->nome) {
        "Top Gun - Maverick" => "Ação",
        "It - A Coisa" => "Terror",
        default => "Desconhecido",
    };

    var_dump($filme);



    