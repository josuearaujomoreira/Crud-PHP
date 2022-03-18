<?php
include('conexao.php');

//Montando Query
$sql = "SELECT * FROM `clientes`";

//Execultando o sql 
$reultado = mysqli_query($conexao, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <hr>

    <style>
        th,
        td {
            border: 1px solid black;
        }
    </style>


    <!-- Tabela de Consultar-->
    <table style="  border: 1px solid black;">
        <th>Id</th>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Idade</th>
        <th>E-mail</th>

        <?php
            //laço para ler vetor
            while ($linha = $reultado->fetch_assoc()) {
        ?>

        <tr>
            <td><?= $linha['id']?></td>
            <td><?= $linha['nome']?></td>
            <td><?= $linha['cidade']?></td>
            <td><?= $linha['idade']?></td>
            <td><?= $linha['email']?></td>
            <td><button>Editar</button></td>
        </tr>
        <?php
            }
        ?>

    </table>


</body>

</html>