<?php

$servidor = "localhost";
$bdname = "cadastro";
$usuario = "root";
$senha = "";
$porta = 3306;
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname);

if(!$conexao)
    die("Problemas com a conexão com o banco de dados. Descriçãop do problema: " . mysqli_connect_error());

echo "Conexão realizada com sucesso!";

?>