<?php
    
    $lista = [
        "nome" => "Victor",
        "saldo"=> 1000.0,
    ];

    do {
        echo "**************************************\n";
        echo "Consultar saldo - 1\n";
        echo "Sacar dinheiro - 2\n";
        echo "Depositar dinheiro - 3\n";
        echo "Sair 4\n";
        $opcao = (int) fgets(STDIN);

        if($opcao == 4){
            break;
        }

        switch ($opcao){
            case 1:
                echo "Saldo: " . $lista["saldo"] . "\n";
                break;
        
            case 2:
                echo "Informe a quantidade a ser sacada:\n";
                $saque = (float) fgets(STDIN);
                
                if($saque > $lista["saldo"]){
                    echo "Saldo Insuficiente! Transação negada.\n";
                    break;
                }

                $lista["saldo"] = $lista["saldo"] - $saque;
                echo "Transação Realizada com Sucesso!\nNovo Saldo: " . $lista["saldo"] . "\n";
                break;

            
            case 3:
                echo "Informe a quantidade a ser despositada:\n";
                $deposito = (float) fgets(STDIN);
                $lista["saldo"] = $lista["saldo"] + $deposito;
                echo "Transação Realizada com Sucesso!\nNovo Saldo: " . $lista["saldo"] . "\n";
            
            default:
                break;
            }

    } while ($opcao <> 4);
