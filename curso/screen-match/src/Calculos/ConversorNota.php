<?php 
namespace ScreenMatch\Calculos;
use ScreenMatch\Models\Avaliavel;

    class ConversorNota{

        public function converte(Avaliavel $avaliavel) : float{

            $nota = $avaliavel -> media();

            try{
                return round($nota)/2;
            }
            catch(\DivisionByZero $erro){
                return 0;
            }
        }

    }