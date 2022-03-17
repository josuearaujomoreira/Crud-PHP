<?php
include('conexao.php');

//Montando Query
$sql="SELECT * FROM `clientes`";

//Execultando o sql 
$reultado = mysqli_query($conexao,$sql);

//laço para ler vetor
while($linha = $reultado->fetch_assoc()){
            $nome = $linha['nome'];
            $cidade = $linha['cidade'];
            $idade = $linha['idade'];
            $email = $linha['email'];
}

//Exibindo Valores
echo  $nome."<br>";
echo  $cidade."<br>";
echo  $idade."<br>";
echo  $email."<br>";



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
    <form action="cadastrando.form.php" method="post">
        Nome: <input type="text" name="nome" id="" value="" >
        <br>
        Cidade: <input type="text" name="cidade" value="" id="">
        <br>
        Idade: <input type="text" name="idade" value="" id="">
        <br>
        E-mail: <input type="email" name="email" value="" id="">
        <br>
        <button type="submit">####</button>
        <hr>

    </form>

    <hr>

    <!-- Tabela de Consultar-->



</body>

</html>