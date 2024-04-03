<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01 PHP</title>
</head>

<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
            $numero = $_GET["numero"];
            $ante = $numero - 1;
            $suce = $numero + 1;

            echo "<p>O Número escolhido foi <strong>$numero</strong></p>";
            echo "<p>Número Antecessor é $ante</p>";
            echo "<p>Número Sucessor é $suce</p>"
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>

</body>

</html>