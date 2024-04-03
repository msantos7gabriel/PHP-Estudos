<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>

<body>
    <?php
    // CAPTURANDO OS DADOS DO FORMULARIO RETROALIMENTADO  
    $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Informe um Numero</h1>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="v1">Numero</label>
            <input type="number" name="v1" id="v1" required value="<?= $valor1 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php
        $raiz_quadrada = sqrt($valor1);
        $raiz_cubica = $valor1 ** (1 / 3);
        echo " 
        <p>Analizando o <strong>número $valor1</strong>, temos:</p>
        <ul>
            <li>
                <p>A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3) . "</strong></p>
            </li>
            <li>
                <p>A sua raiz cubica é <strong>" . number_format($raiz_cubica, 3) . "</strong></p>
            </li>
        </ul>
"
        ?>

    </section>
</body>

</html>