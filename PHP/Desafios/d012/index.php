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
    $tempo = $_GET['tempo'] ?? 0;
    ?>
    <main>
        <h1>Calculdora de Tempo</h1>
        <form action<?= $_SERVER['PHP_SELF'] ?> " method=" get">
            <label for="tempo">Qual é o total em segundos ?</label>
            <input type="number" name="tempo" id="tempo" required value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h1>Totalizando tudo</h1>
        <?php
        // 1 mim = 60 segundos 
        // 1 hora = 3600 segundos
        // 1 dia = 86400 segundos
        // 1 semana = 604800 segundos 

        $semanas =  $tempo / 604800;
        $dias =  $tempo % 604800 /  86400;
        $horas = $tempo % 604800 % 86400 / 3600;
        $minutos = (int) $tempo % 604800 % 86400 % 3600 / 60;
        $segundos = (int)$tempo % 604800 % 86400 % 3600 % 60;
        var_dump($segundos);

        echo "<p>Analizando que voce digitou,  <strong>" . number_format($tempo, 0, ",", ".") . "</strong> equivalem a um total de:</p>";
        echo "        <ul>
        <li>" . floor($semanas) . " Semanas</li>
        <li>" . floor($dias) . " Dias</li>
        <li>" . floor($horas) . " Horas</li>
        <li>" . floor($minutos) . " Minutos</li>
        <li>" . floor($segundos) . " Segundos</li>
    </ul>";
        ?>


    </section>
</body>

</html>