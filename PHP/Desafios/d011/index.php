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
    // CAPTURANDO OS DADOS DO FORMULARIO RETROALIMENTADO
    $valor = $_GET['produto'] ?? 0;
    $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="Preço">Preço do produto (R$)</label>
            <input type="number" name="produto" id="produto" required step="0.01" min="0.10" value="<?= $valor ?>">

            <label for="reajuste">Qual será o valor do reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()"
                value="<?= $reajuste ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado Do Reajuste</h2>
        <?php
        $aumento = $valor * $reajuste / 100;
        $novo = $valor + $aumento;
        ?>
        <p>O produto que custava R$ <?= $valor ?>, com <strong> <?= $reajuste ?>% de aumento </strong> vai passar a
            custar <strong>R$ <?= $novo ?></strong> a partir de agora.</p>



    </section>
    <script>
    mudaValor()

    function mudaValor() {
        p.innerText = reajuste.value
    }
    </script>
</body>

</html>