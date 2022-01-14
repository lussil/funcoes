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

function Primos($inicial, $final)
{
    $primos = [];
    for ($i = $inicial; $i <= $final; $i++) {
        $divisores = 0;

        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            $primos[] = $i;
        }
    }
    return $primos;
}

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

function sequenciaCrescente($array) {

    $elementos = count($array);


    foreach ($array as $key => $value) {
        $value;
    }

    for ($i=0; $i < $elementos ; $i++) { 
        unset($array[$i]);
        if ($array[$i - 1] > $array[$i]) {
            return 0;
        }
    }
} ;



echo SeculoAno(1700);
echo "<br>";
echo '<pre>';
print_r(Primos(10, 29));
echo '</pre>';
echo "<br>";
echo '<pre>';
print_r(Sorteio());
echo '</pre>';


