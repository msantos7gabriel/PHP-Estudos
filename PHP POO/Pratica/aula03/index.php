<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>

<body>
    <pre>
    <?php
    require_once 'caneta.php';
    $c1 = new caneta;
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    $c1->rabiscar();
    $c1->tampar();
    // atributo privado $c1->carga="99";
    var_dump($c1);
    ?>
    </pre>
</body>

</html>