<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 6 PHP</title>
</head>

<body>
    <?php
    // CAPTURANDO OS DADOS DO FORMULARIO RETROALIMENTADO  
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 1;

    ?>
    <main>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" required value="<?= $valor1 ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" required value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Divisão</h2>
        <?php
        $resultado = $valor1 / $valor2;
        $resto = $valor1 % $valor2;

        echo "
        <table class=\"divisao\">
        <tr>
            <td>$valor1</td>
            <td>$valor2</td>
        </tr>
        <tr>
            <td>$resto</td>
            <td>$resultado</td>
        </tr>
    </table>";
        ?>
    </section>
</body>

</html>