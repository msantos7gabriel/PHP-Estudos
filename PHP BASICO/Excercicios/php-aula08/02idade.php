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

        $nome = $_GET["nome"] ?? "[Não Informado]";
        $ano = (INT)$_GET["ano"] ?? 2024;
        $sexo = $_GET["sexo"] ?? "[Sem Sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade Anos.";
        ?>
        <br>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>

</html>