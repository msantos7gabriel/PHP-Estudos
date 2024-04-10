<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>

<body>
    <pre>
    <?php
    require_once "Caneta.php";
    $c1 = new Caneta("BIC","Azul", "0.5");
    $c2= new Caneta("Teste", "Preta", "2");
    // $c1->setModelo("BIC");
    // $c1->setPonta(0.5);
    // echo "Eu tenho Uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
    var_dump($c1);
    echo"<br>";
    echo"<br>";
    var_dump($c2);
    ?>
    </pre>
</body>

</html>