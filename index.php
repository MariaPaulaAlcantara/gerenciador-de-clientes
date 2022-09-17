<?php 
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Salão de Beleza Pretty</title>
</head>
<body>
    <div class="title-page">
        <div class="title">
            <h1>Salão de Beleza - Pretty Woman</h1>
        </div>
    </div>

    <div class="container">
        <a href="client-page.html">
        <div class="card card-1">
            <div class="card-header">
                <img src="https://cdn.pixabay.com/photo/2018/04/03/23/04/woman-3288365__340.jpg" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Eu sou</h3>
                <h2 class="card-titulo">Cliente</h2>
                <p class="card-texto">Entre e coloque as informações que são solicitadas
                    para que você possa marcar um horario no nosso salão.
                </p>
            </div>
            <div class="card-footer">
                <p>Entrar</p>
            </div>
        </div>
        </a>

        <a href="painel-de-controle.html">
        <div class="card card-2">
            <div class="card-header">
                <img src="https://cdn.pixabay.com/photo/2020/08/30/14/57/beautician-5529805__340.jpg" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Eu sou</h3>
                <h2 class="card-titulo">Funcionário(a)</h2>
                <p class="card-texto">
                    Para obter informações sobre seus horarios, entre outras informações, acesse seu perfil.
                </p>
            </div>
            <div class="card-footer">
                <p>Entrar</p>
            </div>
        </div>
        </a>

        <!-- <div class="card card-3">
            <div class="card-header">
                <img src="data:image/jpeg;base64,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" class="card-img" />
            </div>
            <div class="card-body">
                <h3 class="card-local">Conheça nosso salão</h3>
                <h2 class="card-titulo">Nosso Salão</h2>
                <p class="card-texto">Texto do Card</p>
            </div>
            <div class="card-footer">
                <p>Entrar</p>
            </div>
        </div> -->

    </div>


</body>
</html>