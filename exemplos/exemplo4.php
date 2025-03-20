<?php
    function operacao(int $a, int $b, String $tipo) : float{
        if ($tipo === "+"){
            return (float)($a+$b);
        }
        else if ($tipo === "-"){
            return (float)($a-$b);
        }
        else if ($tipo === "*"){
            return (float)($a*$b);
        }
        else if ($tipo ==="/"){
            return (float)($a/$b);
        }
        else {
            echo "Opração Inválida\n";
            return 0.0;
        }
    }

    function imc(float $peso, float $altura): void{
        $imc = $peso/$altura**2;
        if ($imc <= 18.5) {
            echo "Abaixo do normal\n";
        } elseif ($imc >= 18.6 && $imc < 25) {
            echo "Normal\n";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Sobrepeso\n";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "Obesidade I\n";
        } elseif ($imc >= 35 && $imc < 40) {
            $imc = "Obesidade II\n";
        } elseif ($imc >= 40) {
            echo "Obesidade III\n";
        } else {
            echo "Dado Inválido\n";
        }
    }

    function celciusParaFahrenheit(float $celcius): float{
        return $celcius*1.8+32;
    }


    $resultado = operacao(12, 3, "*");
    echo $resultado . "\n";
    imc(80, 1.75);
    $f = celciusParaFahrenheit(28);
    echo $f . "\n";

