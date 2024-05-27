<?php

function gerarNumeros($inicio, $fim)
{
    $lista = [];
    for ($i = $inicio; $i <= $fim; $i++) {
        array_push($lista, $i);
    }
    return $lista;
}

for ($i = 0; $i < 5; $i++) {
    $inicio = random_int(0, 10);
    $fim = random_int(10, 20);
    $numeros = gerarNumeros($inicio, $fim);
}