<?php

    function exibeMensagemLancamento(int $anoLancamento): void{
        if ($anoLancamento > 2024){
            echo "Lançamento!";
        }
        elseif ($anoLancamento >= 2020 && $anoLancamento<=2024) {
            echo "Filme novo!";
        }
        else {
            echo "Um ótimo filme!";
        }
    }

    function includioNoPlano(bool $planoPrime, int $anoLancamento): bool{
        if ($planoPrime || $anoLancamento < 2025){
            return true;
        }
        else{
            return false;
        }
    }
