<?php

$servidor = "localhost";
$bdname = "cadastro_fabiana";
$usuario = "elektro";
$senha = "ipi2022";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $bdname);

if(!$conexao)
    die("Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error());

echo "Conexão realizada com sucesso!";

?>