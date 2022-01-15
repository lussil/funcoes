<?php

function SeculoAno($ano)
{
    if ($ano > 0 and $ano < 99) {
        return $seculo = 00;
    } elseif ($ano < 0) {
        return "insira um ano maior que 0";
    } else {
        $dezena = substr($ano, -2);

        $seculo = substr($ano, 0, -2);

        if ($dezena != '00') {
            $seculo = $seculo + 1;
        }
        return  "Ano " . $ano . " = século " . $seculo;
    }
}