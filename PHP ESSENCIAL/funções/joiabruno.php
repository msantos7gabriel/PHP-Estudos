<?php

function calculadora($numero, $potencia)
{
    $numero1 = $numero;
    for ($i = 1; $i < $potencia; $i++) {
        $numero *= $numero1;
    }
    return $numero;
}

$numero = calculadora(2, 12);
echo $numero;
