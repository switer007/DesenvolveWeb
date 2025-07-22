<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <img src="imagens/logoweb.png" alt="Seu Logo" class="img-fluid" style="max-width: 1800px;">

    <!-- <div class="table-responsive">
        <table class="table">
        ...
        </table>
    </div> -->
    <div class="row">
        <div class="col-md-2">
            <button type="button" class="btn btn-dark">Cadastro</button><br>
            <button type="button" class="btn btn-dark">Doação</button><br>
            <button type="button" class="btn btn-dark">Lista de itens</button><br>
            <button type="button" class="btn btn-dark">Lista de funcionários</button><br>
            <button type="button" class="btn btn-dark">Checagem</button><br>
        </div>
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Voluntario</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Opções</th>
                        <th scope="col">Doações</th>
                        <th scope="col">Comunidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Thiago</td>
                        <td>Otto</td>
                        <td>@thiagosp@gmail.com</td>
                        <td>11993009920</td>
                        <td>Masculino</td>
                        <td>05</td>
                        <td>Senac</td>
                        <td><button type="button" class="btn btn-dark">Ver</button></td>
                        <td><button type="button" class="btn btn-dark">Editar</button></td>
                        <td><button type="button" class="btn btn-dark">Excluir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Vitoria</td>
                        <td>@jacosp@gmail.com</td>
                        <td>14963258441</td>
                        <td>Feminino</td>
                        <td>50</td>
                        <td>Senac</td>
                        <td><button type="button" class="btn btn-dark">Ver</button></td>
                        <td><button type="button" class="btn btn-dark">Editar</button></td>
                        <td><button type="button" class="btn btn-dark">Excluir</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Mizael</td>
                        <td>@johnjohn@gmail.com</td>
                        <td>1499985522</td>
                        <td>Feminino</td>
                        <td>10</td>
                        <td>Senac</td>
                        <td><button type="button" class="btn btn-dark">Ver</button></td>
                        <td><button type="button" class="btn btn-dark">Editar</button></td>
                        <td><button type="button" class="btn btn-dark">Excluir</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>