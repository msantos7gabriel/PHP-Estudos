<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <pre>
        <?php
        require_once("requires.php");
        $c = new mamifero();
        $l = new lobo();
        $k = new  cachorro();
        $l->emitirSom();
        $k->reagirFrase("Olá");
        $k->reagirFrase("Vai Apanhar");
        $k->reagirHora(11, 45);
        $k->reagirHora(21, 00);
        $k->reagirDono(true);
        $k->reagirDono(false);
        $k->reagirIdadePeso(2, 12.5);
        $k->reagirIdadePeso(17, 4.5);
        ?>
    </pre>
</body>

</html>