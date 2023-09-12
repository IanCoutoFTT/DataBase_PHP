<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bancodedados="dbcrud";

    $conn= new mysqli($servidor, $usuario, $senha, $bancodedados); 

if ($conn->connect_error) {
    die("falha na conexão: " . $conn->connect_error); 
}
    echo "conectado no banco de dados com sucesso. Obrigado! <br>";

?>
