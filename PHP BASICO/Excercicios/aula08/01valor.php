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
        $valor = $_GET["v"];
        echo "O Valor enviado foi $valor";
        $valor = sqrt($valor);
        echo "<p>A Sua Raiz quadrada é " . number_format($valor, 2, ",", ".") . "</p>";
        ?>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>

</html>