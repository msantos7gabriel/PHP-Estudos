<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>

<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php

        $num = $_POST["n"];
        echo "<p>Analizando o numero <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuario</p>";

        $int = (int) $num;
        $fra = (float)  $num - $int;

        echo "<ul>
        <li>A parte inteira do numero é <strong>$int</strong></li>
        <li>A parte fracionaria do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>"

        ?>
        <button onclick="javascritpt:history.go(-1)">Voltar</button>
    </main>
</body>

</html>