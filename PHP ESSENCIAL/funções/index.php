<?php

function gerarNumeros($inicio = 10, $fim = 20)
{
    $lista = [];
    if ($fim <= $inicio) {
        echo "Não é possível procurar";
    } else {
        for ($i = $inicio; $i <= $fim; $i++) {
            array_push($lista, $i);
        }
        return $lista;
    }
}

$var[] = gerarNumeros(1, 5);
$var[] = gerarNumeros(/*10, 12*/);
$var[] = gerarNumeros(20, 22);

foreach ($var as $num) {
    echo var_dump($num) . "<br>";
}



function formatar_preco($preco)
{
    return "R$ " . number_format($preco, 2, ",", ".");
}

echo "O Preço é: <b>" . formatar_preco(4.35);
