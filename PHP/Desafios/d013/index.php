<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
    <style>
    h3 {
        text-align: center;
    }

    img {
        height: 60px;
        margin: 4px;
    }
    </style>
</head>

<body>
    <main>
        <?php
        //salvar os valores
        $saque = $_POST['saque'] ?? 0;
        ?>
        <h1>Caixa eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="saque">Qual Valor deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5" required value="<?= $saque ?>">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h3>saque de R$<?= number_format($saque, 2, ",", ".") ?> </h3>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <?php
        $cem = intdiv($saque, 100);
        $resto = $saque % 100;
        $cinquenta = intdiv($resto, 50);
        $resto = $saque % 100 % 50;
        $dez = intdiv($resto, 10);
        $resto = $saque % 100 % 50 % 10;
        $cinco = intdiv($resto, 5);
        ?>

        <ul>

            <li><img src=" img/100-reais.jpg" alt="Nota de 100 Reais"> <?= $cem ?>x</li>
            <li><img src=" img/50-reais.jpg" alt="Nota de 50 Reais"> <?= $cinquenta ?>x</li>
            <li><img src=" img/10-reais.jpg" alt="Nota de 10 Reais"> <?= $dez ?>x</li>
            <li><img src=" img/5-reais.jpg" alt="Nota de 5 Reais"> <?= $cinco ?>x</li>
        </ul>

    </section> I

</body>

</html>