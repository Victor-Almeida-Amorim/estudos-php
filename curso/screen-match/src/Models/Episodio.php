<?php
namespace ScreenMatch\Models;
    class Episodio implements Avaliavel{
        private readonly Serie $serie;
        private readonly string $nome;
        private readonly int $numero;
        use ComAvaliacao;

        public function __construtor(
            Serie $serie,
            string $nome,
            int $numero,
        ) {
            $this -> serie = $serie;
            $this -> nome = $nome;
            $this -> numero = $numero;
        }
    }