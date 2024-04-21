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
        require_once "pessoa.php";
        require_once "livro.php";

        $p[0] = new pessoa("Pedro", 22, "M");
        $p[1] = new pessoa("Maria", 31, "F");

        $l[0] = new livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new livro("POO com PHP", "Maria de Souza", 500, $p[0]);
        $l[2] = new livro("PHP Avançado", "Ana Paula", 800, $p[1]);

        print_r($l[0]);
        $l[0]->abrir();
        $l[0]->folear(299);
        $l[0]->avancarPagina();
        $l[2]->detalhes();

        ?>
    </pre>
</body>

</html>