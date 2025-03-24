<?php
    require 'D:\VisualCode\PHP\curso\screen-match\src\funcoes.php';

    $filme = [];

    $filme = criarFilme(nome: $_POST['nome'], ano: $_POST['ano'], nota: $_POST["nota"], genero: $_POST["genero"]);

    $arq = fopen('filme.json', 'a');

    fwrite($arq, json_encode($filme));
    
    fclose($arq);

    

    header('Location: /sucesso.php?filme=' . $filme['nome']);