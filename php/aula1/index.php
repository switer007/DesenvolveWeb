<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Exemplo </title>
</head>
<body>

<?php
# primeiro código
echo "Olá Mundo!";
//echo imprime a mensagem Olá Mundo na tela.
/* comentários em linha podem ser feitos com os símbolos # e //, já os comentários com mais de uma linha devem ser feitos com os sinais /* e */
//phpinfo ();

//Variáveis em PHP

$texto = " <h1> Sou aluno da TI36 no Senac de Botucatu </h1>";
echo $texto;

$divisao = "<br>============================================== </br>";
echo $divisao;
$nome = "Chaves";
$sobrenome = "del Ocho";
echo " Olá, meu nome é $nome e meu sobrenome é $sobrenome.";
/*Ex. 1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade. Atribua valores a essas variáveis e exiba uma mensagem que combine esses valores. */
$divisao = "<br>============================================== </br>";
echo $divisao;
$nome = "James";
$idade = "33anos";
$cidade = "Botucatu";

echo " Olá meu nome é $nome, tenho $idade e sou da cidade de $cidade.";


?>

</body>
<html>