<?php
namespace ScreenMatch\Models;

    interface Avaliavel{
        function avalia(float $nota) : void;
        function media() : float;
    }