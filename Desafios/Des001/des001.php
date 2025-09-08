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
        <h1>Resultado Final</h1>
        <p>
            <?php
                $num = $_POST["num"];
                if(!$num){
                    echo "<p>Nenhum número informado.</p>";
                }else{
                    echo "<p> O número escolhido foi <strong>$num</strong></p>";
                    echo "<p>Seu antecessor é <em>" .($num -1) . "</em></p>";
                    echo "<p>Seu sucessor é <em>" .($num +1) . "</em></p>";
                }
            ?>
        </p>

        <button onclick="javascript:history.back()">&#x2B05;Voltar</button>
    </main>
    
</body>
</html>