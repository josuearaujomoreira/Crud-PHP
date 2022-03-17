<?php
//Incluindo Conexão
include('conexao.php');

//Recebendo Valores
    $nome   = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];

//criando query    
$sql ="INSERT INTO `clientes`(`nome`, `cidade`, `idade`, `email`) VALUES ('$nome','$cidade','$idade','$email')";

//cadastar no banco
$resultado = mysqli_query($conexao,$sql );

// verificando o cadastro
if($resultado==1){
    echo "Cadastro Realizado com Sucesso!";
}else{
    echo "Deu Pau em!";
}


//    

?>