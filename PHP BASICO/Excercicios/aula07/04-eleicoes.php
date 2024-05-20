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
        // Url: http://localhost/cursophp/PHP%20Basico/Excercicios/php-aula07/03-situacao.php?n1=5&n2=8
        $ano = $_GET["an"] ?? 0;
        $idade = (int)date("Y") - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos";
        $tipo = ($idade < 18 || $idade > 65) ? "!Obrigatório" : "Obrigatório";
        echo "<br>Seu voto é $tipo";
        ?>
    </div>
</body>

</html>