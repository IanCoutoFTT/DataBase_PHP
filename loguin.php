<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
<a> </a>

    <form action="cadastrar.php" method="post">
       <table>
            <tr> 
                <td>nome:</td>
            <td><input type="text" name="nome"></td>  
            </tr>
            <tr>
                <td>CPF:</td> 
            <td><input type="number" name ="cpf" placeholder="999.999.999-99"></td>
            </tr>
            <tr> 
                <td>Data  de nascimento:</td>  
            <td><input type="date" name="nascimento"></td>
            </tr>
            <tr>
                    <td>E-mail:</td>
            <td><input type="email" name="email"></td>
                </tr>

            <tr>  
                <td><input type="submit"></td>
            </tr>
            </table>
  </form>
</body>
</html>