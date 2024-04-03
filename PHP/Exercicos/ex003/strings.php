<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <h1>Strings Single e Double Quouted</h1>
    <?php
    $nome = "Gabriel";
    $sobrenome = "Montavão";
    echo "$nome $sobrenome \u{1F525}";
    echo '<br/>$nome $sobrenome \u{1F525}';


    const ESTADO = "Rj";
    echo "<br/>Moro no " . ESTADO;
    const CANAL = "Curoso em Video \u{1F525}";
    echo "<br/>Eu adoro o " . CANAL;
    echo "<br/><br/>Estamos no ano de: " . date("Y");

    // exercicio do minotauro
    
    $nome = "Rodrigo";
    $snome = "Nogueira";

    echo "<br/>$nome \"Minotauro\" $snome";

    //Sequencias de escapes:
    // \n Nova linha
    // \\ barra invertida
    // \$ Sinal de cifrão
    // \u{} Codepoint Unicode
    ?>
    <h1>Heredoc</h1>
    <?php
    //     $curso = "PHP";
//     $data = date("Y");
    
    //     echo <<< FRASE
// Estou estudando
//     $curso em $ano 
//     FRASE;
//output: https://prnt.sc/0iCQCXgj-evD
    ?>
    <h1>Nowdoc</h1>
    <?php 
//     $curso = "PHP";
//     $data = date("Y");
    
    //     echo <<< 'FRASE'
// Estou estudando
//     $curso em $ano 
//     FRASE;
//output: https://prnt.sc/nFtJZxInr1Sk
?>


</body>

</html>