<?php


function Sorteio()
{
    $numerosSorteados = [];
    for ($i = 0; $i < 20; $i++) {
        $numerosSorteados[] = rand(1, 10);
    }

    $Repetidos = array_count_values($numerosSorteados);

    foreach ($Repetidos as $key => $value) {
        if ($value == 1) {
            echo 'valor que não se repete: ' . $key . '<br>';
        }
    }

    return $numerosSorteados ;
};