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
        $a = $_GET["ano"] ?? 1900;
        $a = (int)$a;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos";
        if ($i >= 18) {
            $v = "já pode Votar";
            $d = "Já pode Dirigir";
        }else{
            $v = "não pode Votar";
            $d = "não pode Dirigir";
        }                
        echo"<br>Com $i voce $v e tambem $d";
        ?>
    </div>
</body>

</html>