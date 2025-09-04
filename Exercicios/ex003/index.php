<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
    <Style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </Style>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0x1A;
        echo "O valor da variável é $num <br>";

        $v = 300;
        echo "O tipo da variável é " .gettype($v) .": ";
        var_dump($v);

        $num = 3e2;
        echo "<br>O valor de num é $num <br>";

        $num = (integer) 3e2;
        echo "<br>O valor de numero é $num <br>";

        $casado = false;
        if($casado){
            echo "O valor para casado é verdadeiro";
        }else{
            echo "O valor para casado é falso";
        }

        echo "<br>";

        $vet = [6,2,9,3,5];
        var_dump($vet);

        echo "<br>";
        echo "<br>";
        echo "<br>";

        class pessoa{
            private string $nome;
            private int $idade;
        }

        $p = new pessoa();
        var_dump($p);
    ?>
</body>
</html>