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
        // Url:http://localhost/cursophp/PHP%20Basico/Excercicios/php-aula07/01-operacao.php?a=5&b=3&op=s
        $tipo = $_GET["op"] ?? 0;
        $n1 = $_GET["a"] ?? 0;
        $n2 = $_GET["b"] ?? 0;
        echo "Os Valores passados foram $n1 e $n2 <br>";
        $r = $tipo == "s" ? $n1 + $n2 : $n1 * $n2;
        echo "O Resultado será $r<br>"

        ?>
    </div>
</body>

</html>