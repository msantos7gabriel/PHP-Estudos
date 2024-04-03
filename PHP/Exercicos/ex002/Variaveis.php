<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>

<body>
    <h1>Variaveis e Constantes</h1>

    <?php
    date_default_timezone_set("America/Sao_Paulo"); //Definindo o fuso horário para São Paulo
    $nome = "Gabriel";
    $sobrenome = "Santos";
    const PAIS = "Brasil"; // Valor Imutavel 
    // regras de declarações: https://prnt.sc/cP6eERqByXik
    echo "Bem vindo! , <strong>$nome $sobrenome</strong> Você mora: " . PAIS . "\n Hora: " . date("G:i:s");

    $nome = "Pedro";
    $Nome = "Maria";
    echo "<br />É verdade que seu nome é $Nome ?";

    $salario = 2500.75;
    echo "<br />Seu salario pe de R$:$salario";

    const _PX = 500;
    echo "<br/>Resultado = " . _PX;

    //Recomendação para nomeclatura de variaveis: https://prnt.sc/cKD6ESEt4Grt
    
    $nomeCompleto = "Camelcase";
    $telefone_contato_superior = "Snake Case";
    ?>
</body>

</html>