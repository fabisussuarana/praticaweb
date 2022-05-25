<?php

if(isset($_POST["enviar"])){

    $nome = isset($_POST["nome"]) ? (string) $_POST["nome"] : NULL;
    $email = isset($_POST["email"]) ? (string) $_POST["email"] : NULL;
    $telefone = isset($_POST["telefone"]) ? (string) $_POST["telefone"] : NULL;
    $idade = isset($_POST["idade"]) ? $_POST["idade"] : NULL;
    $linguagem = isset($_POST["linguagem"]) ? $_POST["linguagem"] : NULL;

    if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($idade) && !empty($linguagem)){

        $aux = null;
        $aux .= "Nome: " . $nome . "<br>";
        $aux .= "Email: " . $email . "<br>";
        $aux .= "Telefone: " . $telefone . "<br>";
        $aux .= "Idade: " . $idade . "<br>";
        $aux .= "Linguagens que sei: ";
        
        foreach($linguagem as $val){
            echo $aux .= $val . "<br>";
        }

    }
    else
        echo "Todos os campos devem estar preenchidos!";
}

?>