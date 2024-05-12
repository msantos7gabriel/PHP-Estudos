<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto YouTube</title>
</head>

<body>
    <pre>
    <?php
    require_once("video.php");
    require_once("gafanhoto.php");
    require_once("visualizacao.php");
    $v[0] = new video("Aula 1 de POO");
    $v[1] = new video("Aula 12 de PHP");
    $v[2] = new video("Aula 15 de HTML5");

    print_r($v);
    // $p = new pessoa("Jubileu", 22, "M");
    // print_r($p);
    $g[0] = new gafanhoto("Jubileu", 22, "M", "Juba");
    $g[1] = new gafanhoto("Creusa", 12, "F", "Creuzita");
    print_r($g);

    for ($i = 0; $i < 3; $i++) {
        $vis[0] = new visualizacao($g[0], $v[0]);
        $vis[0]->avaliarNota(10);
    }
    for ($i = 0; $i < 1; $i++) {
        $vis[1] = new visualizacao($g[0], $v[2]);
    }

    print_r($vis);

    ?>
</pre>
</body>

</html>