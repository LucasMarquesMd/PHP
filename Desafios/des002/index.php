<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório em 0 e 100...</p>
        <?php 
            echo "<p>O valor gerado foi <strong>" .(mt_rand(0,100)) . "</strong></p>";
        ?>
        
        <button onclick="javascript:document.location.reload();">&#x1F504;Gerar novo número</button>
        
    </main>
    
</body>
</html>