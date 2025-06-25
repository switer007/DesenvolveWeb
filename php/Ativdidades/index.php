<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
</head>
    <title>Conversor de Moedas</title>
    </head>
    <body>
        <h1>Conversor de Dólar para Real</h1>
        <form method="post">
            Valor em dólar (US$): <input type="text" name="dolar">
            <input type="submit" value="Converter">
        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cotacaoDolar = 5.54;
            $valorEmDolar = floatval($_POST["dolar"]);
            $valorEmReal = $valorEmDolar * $cotacaoDolar;
    
            echo "<p>US$ " . number_format($valorEmDolar, 2, '.', ',') . " equivale a R$ " . number_format($valorEmReal, 2, ',', '.') . "</p>";
        }
        $traco = "<br> ========================================================<br>";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["dolar"]);

        if ($numero % 2 == 0) {
            echo "<p>O número $numero é <strong>PAR</strong>.</p>";
        } else {
            echo "<p>1 número $numero é <strong>ÍMPAR</strong>.</p>";
        }
    }
    $traco = "<br> ========================================================<br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroAleatorio = rand(0, 100);
        echo "<p>Número aleatório gerado: <strong>$numeroAleatorio</strong></p>";
    }
    $traco = "<br> ========================================================<br>";
    // Variáveis
        $nome = "James Felipe";
        $idade = 33;

// Mensagem
        echo "Meu nome é $nome e tenho $idade anos.";

        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Captura os valores dos inputs
            $numero1 = floatval($_POST["numero1"]);
            $numero2 = floatval($_POST["numero2"]);
    
            // Soma
            $soma = $numero1 + $numero2;
    
            // Exibe o resultado
            echo "<h2>Resultado: $numero1 + $numero2 = $soma</h2>"; 
        }
        ?>
        
    </body>
</html>