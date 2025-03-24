<?php
namespace ScreenMatch\Models;

    abstract class Titulo implements Avaliavel{
        use ComAvaliacao;
        public readonly string $nome;
        public readonly int $ano;
        public readonly Genero $genero;
        

        public function __construct(
            string $nome,
            int $ano,
            Genero $genero,
        ) {
            $this -> nome = $nome;
            $this -> ano = $ano;
            $this -> genero = $genero;
        }

        abstract public function duracao() : int;
    }