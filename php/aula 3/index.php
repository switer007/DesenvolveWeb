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
    echo $traco;
    define("ANIMAIS1", array/*COMEÇA NO ZERO*/('cachorro', 'gato' , 'pássaro' , 'peixe' ));
    echo ANIMAIS1[1]."<br>";
    echo ANIMAIS1[3]."<br>";
    var_dump(ANIMAIS1);
    echo $traco;
    echo "<h2>Exemplos com if</h2>";
    $divisor = 20;
    $quociente = 2;
    $resto = $divisor % $quociente;
    if ($resto == 0) 
    {
        echo "O número $divisor é par <br>";
    } else {
        echo "O número $divisor é impar<br>";
    }
    $num = 30;
    if ($num < 20)
    {
        echo "O número $num é menor que 20 <br>";
    } else {
        echo "O número $num não é menor que 20<br>";
    }
    /* echo $num = ($num < 20) ? "menor que 20 <br>" : "maior que 20 <br>";*/
    $num = 21;
    if ($num < 20)
    {
        echo "O número $num é menor que 20";
    } elseif ($num < 20) {
        echo "O número $num é maior que 20";
    } else {
        echo "O número $num é igual a 20";
    }
    /*echo $num = ($num < 20) ? "O número $num é menor que 20" : (($num > 20) ? 'O número $num é maior que 20" : "O número $num é igual a 20") */
    echo $traco;
    $i = 1;
    while ($i <= 10)
    {
        echo " $i | ";
        $i++;
    }
    echo $traco;
    $i = 1;
    while ($i <= 654687469543213241)
    {
        if ($i == 3) break;
        echo "$i | " ;
        $i++;
    }

    ?>
</body>
</html>