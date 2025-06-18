<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Aula3</title>
</head>
<body>
    <?php
    $traco = "<br> ========================================================<br>";
    echo "<h2>Obtendo os tipos de dados com var-dump()</h2>";
    $x = 5;
    $x = 10.365;
    $x = "Hello World!";
    var_dump( $x );
    echo $traco;
    echo "<h2>Constantes</h2>";
    echo "As constantes em PHP podem começar com um letra ou underline, mas não tem o sinal $ antes de seu nome <br>Para criar uma constante utilizamos a função <strong>define()</strong>";
    define("CONSTANTE", "Olá Mundo!!!");
    echo CONSTANTE;
    

    ?>
</body>
</html>