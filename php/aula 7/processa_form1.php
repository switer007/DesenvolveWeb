<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas Pesquisa de Campo - Podologia e Saúde</title>
</head>
<body>
    <div class="container">
    <?php
        //$_SERVER => variável superglobal
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            if (isset($_POST['q1'])) //Verifica se a variável está vazia
            {
                $resposta1 = $_POST ['q1']; //Armazena a resposta da questão 1 na variável resposta1
                echo "Qual a sua faixa de idade?<br>"
                if ($resposta1 == '15a25') {
                    echo "De 15 a 25 anos";
                }   elseif ($resposta1 == '25a45') {
                        echo "De 25 a 45 anos";
                    }
                    elseif ($resposta1 = '45mais') {
                        echo "Mais de 45 anos";
                    }
            }
            if (isset($_POST['q2']))
            {
                $resposta2 = $_POST['q2'];
                
            }
        }
    ?>
    </div>
</body>
</html>