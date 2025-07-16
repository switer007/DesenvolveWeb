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
        <a class="btn btn-primary" href="javascript: history.go(-1)" role="button">Voltar</a>
        <h2>Respostas - Pesquisa de campo - podologia e saúde</h2>
    <?php
        //$_SERVER => variável superglobal
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            if (isset($_POST['q1'])) //Verifica se a variável está vazia
            {
                $resposta1 = $_POST ['q1']; //Armazena a resposta da questão 1 na variável resposta1
                echo "Qual a sua faixa de idade?<br>";
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
                echo "<br>Qual seu gênero?<br>";
                if ($resposta2 == 'masc'){
                    echo "Masculino";
                } elseif ($resposta2 == 'fem') {
                    echo "Feminino";
                } elseif ($resposta2 == 'outros') {
                    echo "Outros";
                }
                    
                }
                if (isset($_POST['q3']))
                {
                    $resposta3 = $_POST['q3'];
                    echo "<br>Você possui Diabetes e/ou Pressão Alta?<br>";
                    if ($resposta3 == 'diabetes'){
                        echo "Sim, tenho Diabetes";
                    } elseif ($resposta3 == 'pressao') {
                        echo "Sim, tenho Pressão Alta";
                    } elseif ($resposta3 == 'dia/pressao') {
                        echo "Sim, possuo Diabetes e Pressão Alta";
                    } elseif ($resposta3 == 'nenhum') {
                        echo "Não, não possuo nenhum dos dois";
                    }
                }
            }
            else {
                echo "<div class=\"--bs-warning\"><p>O formulário não foi enviado.</p></div>";
            }
        
    ?>
    </div>
</body>
</html>