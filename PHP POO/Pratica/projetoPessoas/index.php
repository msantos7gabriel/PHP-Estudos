<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança - POO</title>
</head>

<body>
    <pre>
<?php

include_once("pessoa.php");
include_once("aluno.php");
include_once("funcionario.php");
include_once("professor.php");

$p[1] = new pessoa();
$p[2] = new aluno();
$p[3] = new professor();
$p[4] = new funcionario();

$p[1]->setNome("Pedro");
$p[2]->setNome("Maria");
$p[3]->setNome("Cláudio");
$p[4]->setNome("Fabiana");

$p[1]->setSexo("M");
$p[4]->setSexo("F");
$p[2]->setCurso("Informática");
$p[3]->setSalario(2500.75);
$p[4]->setSetor("Estoque");

$p[3]->receberAumento(550.25);
$p[4]->mudarTrabalho();
$p[2]->cancelarMatricula();

print_r($p[1]);
print_r($p[2]);
print_r($p[3]);
print_r($p[4]);


?>

</pre>
</body>

</html>