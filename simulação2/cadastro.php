<?php

    include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email=$_POST['email'];
    $contato=$_POST['contato'];
    $senha = senha_hash($_POST['senha'], SENHA_DEFAULT);

    $sql="INSERT INTO cadastro(nome, email, contato, senha)
    VALUES ('$nome', '$email', '$contato', '$senha')";
    if(mysqli_query($conexao, $sql)){
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>