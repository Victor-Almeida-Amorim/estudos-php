<?php
namespace ScreenMatch\Models;

    trait ComAvaliacao {
        private array $notas = [];

        public function avalia(float $nota) : void {
            $this->notas[] = $nota;
        }
        public function media(): float{
            $soma = array_sum($this->notas);
            $cont = count($this->notas);

            return $soma/$cont;
        }
    }