<?php

//Dados para conexão
    $host = 'localhost';
    $user = 'root';
    $senha = '12345678';
    $data_base = 'chambari';


//Criando [Define] para colocar paramentros de conexão com Bancokkkkk
    define('HOST', $host);  //Serve 
    define('USUARIO', $user); // user
    define('SENHA', $senha);  //PassWord
    define('DB', $data_base); //NameDataBase


//Fazendo a Conexão e  Colocando em Uma Variável
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die
     ('Não foi possível conectar. Erro de acesso ao banco.');
     
     $conexao->set_charset("utf8");//resolvendo problemas de acentuação
