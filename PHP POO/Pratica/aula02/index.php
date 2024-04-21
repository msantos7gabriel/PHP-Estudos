<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    require_once 'caneta.php';
    $c1 = new caneta;
    $c1->cor = "azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    // $c1->destampar();
    // $c1->rabiscar();
    var_dump($c1);
echo"<br>";
echo"<br>";
    $c2 = new caneta;
    $c2->cor = "verde";
    $c2->carga = 50;
    $c2->tampar();
    var_dump($c2);
    ?>
</body>

</html>