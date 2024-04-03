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
    $nascimento = $_GET['nascimento'] ?? 2000;
    $futuro =  $_GET['futuro'] ?? 2024;
    $age_prediction = $futuro - $nascimento;
    $ano_atual = date("Y");

    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action<?= $_SERVER['PHP_SELF'] ?>" method=" post">
            <label for="nascimento">Em que ano você nasceu? </label>
            <input type="number" name="nascimento" id="nascimento" min="1900" max="<?= ($ano_atual - 1) ?>" required value="<?= $nascimento ?>">
            <label for="futuro">Quesa ber sua idaded em que ano? (atualmente estamos em <?= $ano_atual ?>)</label>
            <input type="number" name="futuro" id="futuro" required min="1900" value="<?= $futuro ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?= "<p>Quem nasceu em $nascimento vai ter <strong>$age_prediction anos</strong> em $futuro!</p>" ?>
    </section>
</body>

</html>