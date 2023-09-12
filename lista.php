<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'conecta.php';
$sql="SELECT * FROM usuario";
$resultado = $conn->query($sql);
?> 
<table> 
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>telefone</th>
        <th>email</th>
        <th>nascimento</th>
        <th>cep</th>
        <th>endereço</th>
        <th>excluir</th>
        <th>alterar</th>
    </tr>

<?php
if ($resultado->num_rows > 0){
    while ($linha=$resultado->fetch_assoc()){
        echo "<tr>";
            echo $linha['nome'];
            echo $linha['cpf'];
            echo $linha['telefone'];
            echo $linha['email'];
            echo $linha['nascimento'];
            echo $linha['cep'];
            echo $linha['profissao'];
            echo $linha['estadocivil'];
            echo $linha['endereco']. "<br>";
    }
}
?>

<td>
    <a href=" <?php echo"cadastrar.php?id=".$linha['id']
    ."&nome=".$linha['nome']
    ."&cpf=".$linha['cpf']
    ."&telefone=".$linha['telefone']
    ."&email=".$linha['email']
    ."&nascimento=".$linha['nascimento']
    ."&cep=".$linha['cep']
    ."&profissão=".$linha['profissão']
    ."&estadocivil=".$linha['estadocivil']
    ."&endereco=".$linha['endereco']?>">
</td> 

<td>
    <a href=" <?php echo"excluir.php?id=".$linha['id']
    ."&nome=".$linha['nome']
    ."&cpf=".$linha['cpf']
    ."&telefone=".$linha['telefone']
    ."&email=".$linha['email']
    ."&nascimento=".$linha['nascimento']
?>">
</td> 

<td>
    <a href="<?php echo"excluir.php?id=".$linha['id'];?>">
        excluir 
    </a>
</td>

<?php
    echo "</tr>";
        

?>
    
</body>
</html>