<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $preço = $_GET["p"] ?? 0;
        $preço2 = $_GET["p"] ?? 0;
        echo "O Preço do produto é R$ $preço";
        $preço *= 1.10;
        echo "<br>O Preço com produto com 10% de aumento sera R$ " .  number_format($preço, 2, ",", ".");
        $preço2 *= 0.9;
        echo "<br>O Preço com produto com 10% de desconto sera R$ " . number_format($preço2, 2, ",", ".");

        ?>
    </div>
</body>

</html>