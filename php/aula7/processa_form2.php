<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary" href="javascript: history.go(-1)" role="button">Voltar</a> | <a class="btn-primary" href="index.html" role="button">Home</a>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['interesses'])) {
            echo "<h2> Interesses selecionados</h2>";
            echo "<ul>";
            foreach ($_POST['interesses'] as $interesse) {
                echo "<li>".$interesse."</li>";
            }
        } else {
            echo "<p>Nenhum checkbox selecionados</p>";
        }
    } else {
        echo "<p>O fomulário não foi enviado</p>";
    }
    
    ?>
</body>
</html>