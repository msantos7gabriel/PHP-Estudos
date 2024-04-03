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
    $valor1 = $_GET['v1'];
    $valor2 = $_GET['v2'];
    $resultado = $valor1 + $valor2;
    ?>
    <main>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required step="0.01" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required step="0.01" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?= "<p>A soma entre os valores: $valor1 e $valor2 é de: $resultado</p>" ?>
    </section>
</body>

</html>