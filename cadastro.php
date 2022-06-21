<?php

    include("./conexao.php");

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios VALUES ('$nome', '$data', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo '<br>Dados inseridos!';
    }
    else
        echo 'Erro: ' . mysqli_connect_error();
?>