<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
</head>

<body>
    <pre>
<?php
require_once "visitante.php";
require_once "aluno.php";
require_once "bolsista.php";

// $p1 = new pessoa(); classe abstrata não pode virar objeto

$v1 = new visitante();
$v1->setNome("Juvenal");
$v1->setIdade(33);
$v1->setSexo("M");
print_r($v1);

$a1 = new aluno();
$a1->setNome("Pedro");
$a1->setMatricula(221166);
$a1->setIdade(16);
$a1->setSexo("M");
$a1->setCurso("Informática");
$a1->pagarMensalidade();
print_r($a1);

$b1 = new bolsista;
$b1->setMatricula(666777);
$b1->setNome("Jubileu");
$b1->setBolsa(12.5);
$b1->setCurso("administração");
$b1->setIdade(17);
$b1->setSexo("M");
$b1->pagarMensalidade();
print_r($b1);

?>
</pre>
</body>

</html>