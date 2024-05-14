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
        // url: http://localhost/cursophp/PHP%20Basico/Excercicios/php-aula05/somador.php?a=5&b=8
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) / 2;
        echo "<p>A Soma Vale = " . ($n1 + $n2) . "</p>";
        echo "<p>A Subtração Vale = " . ($n1 - $n2) . "</p>";
        echo "<p>A Multiplicação Vale = " . ($n1 * $n2) . "</p>";
        echo "<p>A Divisão  Vale = " . ($n1 / $n2) . "</p>";
        echo "<p>A Modulo Vale = " . ($n1 % $n2) . "</p>";
        echo "<p>A Média Vale = $m</p>";
        ?>
    </div>
</body>

</html>