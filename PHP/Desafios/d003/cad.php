<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 03 PHP</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php

        $reais = $_GET["reais"];
        $dolar = round($reais / 4.97, 2);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
        echo "<br><strong>*Cotação Fixa de US$ 4,97</strong>, informado diretamente no código <br>";
        ?>
        <br>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>