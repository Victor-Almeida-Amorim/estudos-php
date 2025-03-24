<?php
    require __DIR__ . '\src\Models\Filme.php';
    require __DIR__ . '\src\Models\Genero.php';
    require __DIR__ . '\src\funcoes.php';

    echo "Bem vindo";

    $filme = new Filme(
        'Thor 3',
        2021,
        Genero::SuperHeroi
    );

    $filme->avalia(10);
    $filme->avalia(7);
    $filme->avalia(5);
    $filme->avalia(8);

    var_dump($filme);

    echo  'Média = ' . $filme->nota();
