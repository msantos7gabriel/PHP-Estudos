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
    $valor1 = $_GET['v1'] ?? 0;
    $peso1 = $_GET['p1'] ?? 1;
    $valor2 = $_GET['v2'] ?? 0;
    $peso2 = $_GET['p2'] ?? 1;

    ?>
    <main>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" required value="<?= $valor1 ?>">
            <label for="p1">1° peso</label>
            <input type="number" name="p1" id="p1" required min="1" value="<?= $peso1 ?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" required value="<?= $valor2 ?>">
            <label for="p2">2° peso</label>
            <input type="number" name="p2" id="p2" required min="1" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
        $media_simples = ($valor1 + $valor2) / 2;
        $media_ponderada = (($peso1 * $valor1) + ($peso2 * $valor2)) / ($peso1 + $peso2);
        echo "<p>Analixanso os valores $valor1 e $valor2:</p>";
        echo "        <ul>
        <li>
            <p>A <strong>Média Aritimética Simples</strong> entre os valores é igual a,
                " . number_format($media_simples, 2) . "</p>
        </li>
        <li>
            <p>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a
                " . number_format($media_ponderada, 2) . "
            </p>
        </li>
    </ul>
";
        ?>

    </section>
</body>

</html>