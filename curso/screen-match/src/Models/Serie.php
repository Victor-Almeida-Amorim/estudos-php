<?php
namespace ScreenMatch\Models;

    class Serie extends Titulo{

        private readonly int $temporadas;
        private readonly int $episodios;
        private readonly int $duracaoEpisodio;

        public function __construct(
            string $nome,
            int $ano,
            Genero $genero,
            int $temporadas,
            int $episodios,
            int $duracaoEpisodio,
        ) {
            parent::__construct($nome, $ano, $genero);
            $this -> temporadas = $temporadas;
            $this -> episodios = $episodios;
            $this -> duracaoEpisodio = $duracaoEpisodio;
        }

        #[Override]
        public function duracao() : int{
            return $this-> temporadas * $this -> episodios * $this-> duracaoEpisodio;
        }
    }