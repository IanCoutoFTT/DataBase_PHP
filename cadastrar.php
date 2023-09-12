<?php

include 'conecta.php'; 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST ['telefone'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];

    $sql= "INSERT INTO usuario(nome, cpf, telefone, email, nascimento)
    VALUES ('$nome', '$cpf', '$telefone', '$email', '$nascimento')";

    if ($conn->query($sql)===True) {
        echo "Dados inseridos com sucesso!"; 
    }
    else{ 
        echo "Houve alguns problemas para salvar" .$slq. $conn->error;
    }
$conn->close();
?>