<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Formulário com PHP</h1>
        <p class="error">Obrigatório</p>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><span class="error">*</span><br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><span class="error">*</span><br><br>
        <label for="website">website: </label>
        <input type="url" name="website" id="website"><br><br>
        <label for="Comentário">Comentários</label>
        <br>
        <textarea name="cometário" id="" cols="30" rows="3"></textarea><br><br>
        <h3>Gênero</h1>
            <label for="genero">Feminino</label>
            <input type="radio" name="genero" id="" value="Feminino">
            <label for="genero">Masculino</label>
            <input type="radio" name="genero" id="" value="Masculino">
            <label for="genero">Outro</label>
            <input type="radio" name="genero" id="" value="Outro"><br><br>
            <input name="enviado" type="submit" value="Enviar">
    </form>

    <?php
    var_dump($_POST);
    echo " <h1>Dados Enviados:</h1>";
    if (isset($_POST['enviado'])) {
        if (empty($_POST['nome']) || strlen($_POST['nome'] < 3 || strlen($_POST['nome'] < 100) || is_numeric($_POST['nome']))) {
            echo "<p class=\"error\">Preencha o campo nome</p>";
        } elseif (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<p class=\"error\">Preencha o campo Email</p>";
        } elseif (!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
            echo "<p class=\"error\">Preencha Corretamente o Campo WebSite</p>";
        } else {
            echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
            echo "<p><b>Email: </b>" . $_POST['email'] . "</p>";
            echo "<p><b>Website: </b>" . $_POST['website'] . "</p>";
            $cometário = empty($_POST['cometário']) ? '' : $_POST['cometário'];
            echo "<p><b>Comentário: </b>" . $cometário . "</p>";
            $genero = "Não Informado";
            if (isset($_POST["genero"])) {
                if ($_POST['genero'] != "Masculino" || $_POST['genero'] != "Feminino" || $_POST['genero'] != "Outro") {
                    $genero = $_POST['genero'];
                }
            }
            echo "<p><b>Gênero: </b>" . $genero . "</p>";
        }
    }
    ?>
</body>

</html>