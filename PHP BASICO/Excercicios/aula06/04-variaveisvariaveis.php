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
        $x = "abc";
        $$x = "def";
        echo "<p>O Conteúdo da variável X e $x</p>";
        echo "<p>A variável ABC criada recebeu o valor $abc</p>";
        ?>
    </div>
</body>

</html>