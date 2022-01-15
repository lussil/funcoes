<?php
// incompleto
function sequenciaCrescente($array)
{
    $elementos = count($array);

    for ($i = 0; $i < $elementos; $i++) {
        array_splice($array, $i, 1);
        if (!isIncreasing($array)) {
            return false;
        };
        return true;
    }
};


function isIncreasing($array)
{
    $elementos = count($array);

    for ($i = 0; $i < $elementos - 1; $i++) {
        if ($array[$i] < $array[$i + 1]) {
            echo ($array[$i] . $array[$i + 1]);
            echo ("<br>");
        } else {
            echo ($array[$i] . $array[$i + 1]);
            echo ("<br>");
            return false;
        }
    }
    return true;
};


$arrayTeste = [0,4,6,6];
var_dump(sequenciaCrescente($arrayTeste));

