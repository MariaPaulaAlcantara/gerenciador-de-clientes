<?php
    session_start();
    include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel-de-controle.css">

    <title>Painel de Controle</title>
</head>
<body>
    <?php
    $result_cliientes = "SELECT * FROM clientes";
    $resultado_usuarios = mysqli_query($mysqli, $result_cliientes);
    ?>

    <table>
        <tr>
            <th>Data</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Celular</th>
            <th>CPF</th>
            <th>Endereço</th>
        </tr>
        <?php while($row_clientes = mysqli_fetch_array($resultado_usuarios)): ?>
        <tr>
            <td><?= $row_clientes['created'] ?></td>
            <td><?= $row_clientes['nome'] ?></td>
            <td><?= $row_clientes['sobrenome'] ?></td>
            <td><?= $row_clientes['email'] ?></td>
            <td><?= $row_clientes['celular'] ?></td>
            <td><?= $row_clientes['cpf'] ?></td>
            <td><?= $row_clientes['endereco'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    
</body>
</html>