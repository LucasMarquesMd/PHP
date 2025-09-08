<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $valor = (double)$_POST['valor'] ?? 0;
            //Cotação vinda da API do Banco Central
            $inicio = date('m-d-Y', strtotime('-7 days'));
            $fim = date('m-d-Y'); 

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados['value'][0]['cotacaoCompra'];

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>".numfmt_format_currency($padrao, $valor/$cotação, "USD")."</strong></p>";

            echo "<p><strong>*Cotação do Banco Central: " .numfmt_format_currency($padrao, $cotação, "USD") . "</strong></p>"
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </main>
</body>
</html>