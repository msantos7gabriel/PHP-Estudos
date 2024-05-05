<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php

    require_once("mamifero.php");
    require_once("ave.php");
    require_once("reptil.php");
    require_once("peixe.php");
    require_once("tartaruga.php");
    require_once("cachorro.php");
    require_once("canguru.php");

    // $a = new animal;
    $m = new mamifero;
    $a = new ave;
    $r = new reptil;
    $r->locomover();
    $m->locomover();
    $a->locomover();

    $c = new canguru;
    $k = new cachorro;
    $t = new tartaruga;

    $c->locomover();
    $t->locomover();
    $k->locomover();


    $m->emitirSom();
    $k->emitirSom();
    $c->emitirSom();


    ?>
</body>

</html>