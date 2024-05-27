<?php

$n1 = 3;
$n2 = 4;
$resultado = 0;

for ($i = 0; $i < $n2; $i++) {
    $resultado += $n1;
}

echo "O Resultado da Multiplicação é: $resultado";

$k = 0;
do {
    $k += 2;
    echo "<br>" . $k;
} while ($k < 10);

echo "<br>";

$l = 0;
while ($l < 10) {
    $l += 2;
    echo "<br>" . $l;
}

echo "<br>";

$nomes = ["Gabriel", "Gustavo", "Guilherme", "João Pedro"];
for ($i = 0; $i < sizeof($nomes); $i++) {
    echo "<p>" . $nomes[$i] . "</p>";
}
echo "<br>";

foreach ($nomes as $nome => $x) {
    echo "<p>O índice é: " . $nome . " e o nome é " . $x . "</p>";
}