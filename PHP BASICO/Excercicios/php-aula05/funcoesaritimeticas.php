<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../_css/estilo.css" />
    <title>Funções Aritméticas em PHP</title>
    <style>
    h2 {
        font: 15 bold arial;
        color: #171559;
    }
    </style>
</head>

<body>
    <div>
        <?php
        $v1 = $_GET["x"] ?? 0;
        $v2 = $_GET["y"] ?? 0;
        echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
        echo "o Valor Absoluto de $v2 é: " . abs($v2);
        echo "<br>o Valor de $v1 a <sup>$v2</sup> é: " . pow($v1, $v2);
        echo "<br>a Raiz de $v1 é: " . sqrt($v1);
        echo "<br>O valor de $v2 arrendondado: " . round($v2); // ceil, Floor
        echo "<br>a parte inteira de $v2 é " . intval($v2);
        echo "<br>o Valor de $v2 em moeda e " . number_format($v2, 2, ",", ".");
        ?>
    </div>
</body>

</html>