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
            $dollar = 5.42;

            // echo "<p>Seus R\$ ".number_format($valor, 2, ",",".") . " equivalem a <strong>U\$ ".number_format($valor/$dollar, 2, ",", ".")."</strong></p>";
            //Biblioteca intl (Internationalization)
            // Formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>".numfmt_format_currency($padrao, $valor/$dollar, "USD")."</strong></p>";

            echo "<p><strong>*Cotação fixa de " .numfmt_format_currency($padrao, $dollar, "USD") . "</strong> informada diretamente no código.</p>"
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </main>
</body>
</html>