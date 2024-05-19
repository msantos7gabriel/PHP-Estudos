<!DOCTYPE html>
<html>

<head>
    <?php
    $txt = $_GET["t"] ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt error natus aperiam voluptate nesciunt laborum. Ratione saepe ipsum praesentium maiores ducimus aliquid unde dolores maxime. Provident tempore totam debitis mollitia!";
    $tam = $_GET["tam"] ?? "12pt";
    $cor = $_GET["cor"] ?? "#000000"
    ?>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        p {
            color: <?= $cor ?>;
            font-size: <?= $tam ?>;
        }
    </style>
</head>

<body>
    <div>
        <?php
        echo "<p>$txt</p>";
        ?>
        <br>
        <a href="03exercicio.html">Voltar</a>
    </div>
</body>

</html>