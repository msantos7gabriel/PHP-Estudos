<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
        var_dump($_GET); // $_Post (outro metodo de envio de dados) $_REQUEST ( Junção de 3 super globais $_GET, $_POST, $_COOKIES)
        $nome = $_GET["nome"] ?? "Sem Nome"; //se não tiver o GET ele vai ser Desconhecido (?? = operador de qualicencia nula)
        $snome = $_GET["sobrenome"] ?? "Desconhecido";
        echo "<p> É um grande Prazer te conhecer, <strong> $nome $snome!</strong> Este é o meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)"> Voltar Para a Página Anterior</a></p>
    </main>
</body>

</html>