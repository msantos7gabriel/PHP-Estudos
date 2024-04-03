<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>

<body>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    const SALARIO_MIN = 1380.60;
    $salario = $_GET['salario'] ?? SALARIO_MIN;


    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" required step="0.01" value="<?= $salario ?>">
            <input type="submit" value="Somar">
            <p>Considerando o salário mínimo de
                <strong><?= numfmt_format_currency($padrao, SALARIO_MIN, "BRL") ?></strong>
            </p>
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        $resto =  $salario % SALARIO_MIN;
        $qdsm = intdiv($salario, SALARIO_MIN); // quantidade de salarios minimos

        echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong> $qdsm salários minimos + " . numfmt_format_currency($padrao, $resto, "BRL") . ".</strong></p>";
        ?>


    </section>
</body>

</html>