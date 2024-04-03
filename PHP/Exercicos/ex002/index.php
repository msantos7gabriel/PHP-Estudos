<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php

    date_default_timezone_set("America/Sao_Paulo");  //Definindo o fuso horário padrão de são pauso
    echo "Hoje é dia" . date("D/M/Y"); // Mostra a data atual do sistema ( D,d/M,m/Y,y) variam.
    echo "\t E a hora atual é " . date("G:i:s T"); // G = 24 g = 12 o resto eu n entendi T= mosta a timezone
    
    ?>
</body>

</html>