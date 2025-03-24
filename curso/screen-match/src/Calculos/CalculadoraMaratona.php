<?php
namespace ScreenMatch\Calculos;
use ScreenMatch\Models\Titulo;

    class CalculadoraMaratona{
        private int $duracaoMaratona = 0;

        public function calcular(Titulo $titulo) : void{

            $this -> duracaoMaratona += $titulo->duracao();

        }

        public function getDuracaoMaratona() : int{
            return $this->duracaoMaratona;
        }

    }