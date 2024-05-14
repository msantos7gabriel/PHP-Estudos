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
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A Variável $\"a\" vale $a <br>";
        echo "A Variável $\"b\" vale $b<br>";

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br>A Variável $\"a\" vale $a<br>";
        echo "A Variável $\"b\" vale $b<br>";
        ?>
    </div>
</body>

</html>