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
    include "conecta.php";

        $id = filter_input(INPUT_GET,'id');
        $nome = filter_input(INPUT_GET,'nome');
        $cpf = filter_input(IMPUT_GET,'cpf');
        $email = filter_input(INPUT_GET,'email');
        $telefone = filter_input(INPUT_GET,'tele$telefone');
        $nascimento = filter_input(INPUT_GET,'nascimento');


        $sql="UPDATE usuario SET nome='$nome', cpf='$cpf', email='$email', telefone='$telefone',
        nascimento='$nascimento', WHERE id='$id'";
        $conn-> query($sql);
    ?>
</body>
</html>