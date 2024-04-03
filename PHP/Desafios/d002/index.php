<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 2 PHP</title>
</head>

<body>

    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>
            <?php
            echo "Gerando um número aleatorio entre 0 e 100...";
            $numeroAleatorio = mt_rand(0, 100);
            echo "<br>O valor Gerado foi <strong>$numeroAleatorio</strong>";
            ?>
        </p>
        <button onclick=" javascript:document.location.reload()">&#x1F504; De novo</button>
    </main>

</body>

</html>