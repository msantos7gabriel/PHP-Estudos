<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>

        <?php

        require_once('contaBanco.php');

        $p1 = new contaBanco(); // Jubileu
        $p2 = new contaBanco(); // Creusa

        $p1->abrirConta("cc");
        $p1->setDono("Jubileu");
        $p1->setNunBanco(1111);
        $p1->depositar(300);

        $p2->abrirConta("cp");
        $p2->setDono("Creusa");
        $p2->setNunBanco(2222);
        $p2->depositar(500);

        $p2->sacar(1000);
 
        $p1->pagarMensal();
        $p2->pagarMensal();
        
        $p1->sacar(338);
        $p2->sacar(630);
        
        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        echo "<br>";
        print_r($p2);
        ?>
</pre>
</body>

</html>