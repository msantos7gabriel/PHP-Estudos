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
        $nota1 = $_GET["n1"] ?? 0;
        $nota2 = $_GET["n2"] ?? 0;
        $m = ($nota1 + $nota2) / 2;
        echo "A Media entre $nota1 e $nota2 é $m";
        // $sit = $m < 6 ? "Reprovado" : "Aprovado";
        echo "<br>A Situação do aluno é: " . strtoupper($m < 6 ? "Reprovado" : "Aprovado");
        // $if = $m < 6 && $m >= 3 ? "Recuperação" : "Reprovado";
        // echo $if;

        ?>
    </div>
</body>

</html>