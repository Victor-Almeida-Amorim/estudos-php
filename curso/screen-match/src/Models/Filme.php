<?php
namespace ScreenMatch\Models;

    class Filme extends Titulo{
        private readonly int $duracao;

        public function __construct(
            string $nome,
            int $ano,
            Genero $genero,
            int $duracao,
        ) {
            parent::__construct($nome, $ano, $genero);
            $this->duracao = $duracao;
        }
        
        #[Override]
        public function duracao() : int{
            return $this->duracao;
        }

    }