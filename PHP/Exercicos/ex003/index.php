<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php

    //0x = Hexadecimal
    //0b = Binario 
    // 0 = Octal
    
    // $num = 3e2;
    // echo "O valor da variável é $num";
    
    // echo "<br/>";
    // $v = "eu odio";
    // var_dump($num); // mstra informações sobre a variavel 
    
    // $num = (int) 3e2;// 3 x 10(2) coerção
    
    // $num = false;
    // var_dump($num);
    // echo "<br/>";
    // echo "O valor da variável é $num";
    // o valor de true do tipo boolean é 1 já o falso é 0
    
    // $vet = [1, 2, 3, 4, "maria", false, 5];
    //var_dump($vet);
    
    class Pessoa
    {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

    ?>

</body>

</html>