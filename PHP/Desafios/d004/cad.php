<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 04 PHP</title>
    <style>
    abbr {
        text-decoration: underline;
    }

    .butoes {
        display: flex;

    }

    button {
        margin: 10px 10px 0px 10px;
    }
    </style>
</head>

<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php

        date_default_timezone_set("America/Sao_Paulo");
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $cotação = $dados["value"][0]["cotacaoCompra"];
        $reais = $_GET["reais"];
        $dolar = $reais / $cotação;

        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
        echo "<br><br><strong>*Cotação Atual de " . numfmt_format_currency($padrao, $cotação, "USD") . ". <br><br>Cotação Retirada do <abbr title=\"Banco do Brasil\">BCB</abbr> do dia " . date("d/m/Y") . " as: " . date("G:i:s") . " </strong><br>";
        ?>

        <div class="butoes">
            <button onclick="javascript:history.go(-1)">Voltar</button>
            <button onclick=" javascript:document.location.reload()">&#x1F504; Recarregar Cotação</button>
        </div>
    </section>


</body>

</html>