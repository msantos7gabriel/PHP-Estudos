<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $atual = (int) date("Y");
        echo "O ano Atual é $atual e o anterior é " . --$atual . ""; // Pos decremento $atual--
        // var_dump($atual);
        ?>
    </div>
</body>

</html>