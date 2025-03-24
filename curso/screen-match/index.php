<?php
spl_autoload_register (function (string $classname){
    $caminho = str_replace("ScreenMatch", '\src', $classname . '.php');
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);

    require __DIR__ . DIRECTORY_SEPARATOR . $caminho;
});

use ScreenMatch\Models\{
    Titulo, Filme, Serie, Episodio, Genero
};

use ScreenMatch\Calculos\{
    CalculadoraMaratona, ConversorNota
};


    echo "Bem vindo";

    $filme = new Filme(
        'Thor 3',
        2021,
        Genero::SuperHeroi,
        180,
    );

    $filme->avalia(10);
    $filme->avalia(7);
    $filme->avalia(5);
    $filme->avalia(8);

    $serie = new Serie(
        'The Flash',
        2014,
        Genero::SuperHeroi,
        9,
        120,
        45
    );

    $serie->avalia(10);
    $serie->avalia(7);
    $serie->avalia(5);
    $serie->avalia(8);

    $calculadora = new CalculadoraMaratona();

    $calculadora -> calcular($filme);
    $calculadora -> calcular($serie);
    
    echo 'Duração da maratona: ' . $calculadora->getDuracaoMaratona() . ' minutos.' . "\n";

    $conversor = new ConversorNota();

    echo $conversor -> converte($serie) . "\n";

    $episodio = new Episodio(
        $serie,
        "Piloto",
        1,
    );

    $episodio->avalia(10);
    $episodio->avalia(10);
    $episodio->avalia(9);
    $episodio->avalia(8);

    echo $conversor -> converte($episodio) . "\n";

