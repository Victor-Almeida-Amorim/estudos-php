<?php

    class Filme {
        public readonly string $nome;
        public readonly int $ano;
        public readonly Genero $genero;
        private array $notas;

        public function __construct(
            string $nome,
            int $ano,
            Genero $genero,
        ) {
            $this -> nome = $nome;
            $this -> ano = $ano;
            $this -> genero = $genero;
            $this -> notas = [];
        }

        public function avalia(float $nota) : void {
            $this->notas[] = $nota;
        }

        public function nota() : float{
            $soma = array_sum($this->notas);
            $cont = count($this->notas);

            return $soma/$cont;
        }
        
    }